@extends('layouts.admin-layout')
@section('title', 'Dashboard')
@section('content')
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-heading">Dashboard</h1>
        <p class="mt-1 text-body">Welcome back, {{ auth('admin')->user()->name }}.</p>
    </div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ([
            ['label' => 'Total users', 'value' => $totalUsers],
            ['label' => 'New users this month', 'value' => $newUsersThisMonth],
            ['label' => 'Admins', 'value' => $totalAdmins],
        ] as $stat)
            <div class="rounded-base border border-default bg-neutral-primary-soft p-5 shadow-xs">
                <p class="text-sm text-body">{{ $stat['label'] }}</p>
                <p class="mt-2 text-3xl font-bold text-heading">{{ number_format($stat['value']) }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-6 rounded-base border border-default bg-neutral-primary-soft shadow-xs">
        <div class="border-b border-default px-5 py-4">
            <h2 class="text-lg font-semibold text-heading">Recent users</h2>
        </div>

        @if ($recentUsers->isEmpty())
            <p class="px-5 py-6 text-sm text-body">No users have signed up yet.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-body">
                    <thead class="bg-neutral-secondary-soft text-xs uppercase text-heading">
                        <tr>
                            <th scope="col" class="px-5 py-3">Name</th>
                            <th scope="col" class="px-5 py-3">Email</th>
                            <th scope="col" class="px-5 py-3">Joined</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recentUsers as $user)
                            <tr class="border-t border-default">
                                <td class="px-5 py-3 font-medium text-heading">{{ $user->name }}</td>
                                <td class="px-5 py-3">{{ $user->email }}</td>
                                <td class="px-5 py-3">{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
