@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users_list') }}</div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary">{{__('Add')}}</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col" class="text-center">{{ __('Is_admin') }}</th>
                                <th scope="col" class="text-center">{{ __('Is_active') }}</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModal" data-user-id="{{ $user->id }}">{{ $user->fullName }}</a>
                                </th>
                                <td>{{$user->email}}</td>
                                <td class="text-center">
                                    @if($user->is_admin) 
                                        <i class="fa-solid fa-square-check" style="color: #00ff11;"></i>
                                    @else
                                        <i class="fa-solid fa-square-xmark" style="color: #f50000;"></i>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($user->is_active)
                                        <i class="fa-solid fa-lock-open"></i>
                                    @else 
                                        <i class="fa-solid fa-lock"></i>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary text-decoration-none">{{__('Edit')}}</a> | <a class="btn btn-danger text-decoration-none">{{__('Delete')}}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                {{ __('Task List') }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">{{ __('Task') }}</th>
                                            <th scope="col">#</th>
                                        </tr>
                                    </thead>
                                    <tbody id="task-list">
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
