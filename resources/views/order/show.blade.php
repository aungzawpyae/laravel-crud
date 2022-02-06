@extends('layouts.app')

@section('content')

<div
    class="flex items-center justify-between p-4 mb-8 text-sm font-semibold mt-3">
    <div class="flex items-center">
        <span class="text-gray-400 font-serif mr-3">Order code : </span>{{ $order->code }}
    </div>

</div>
{{-- 
    @if ($order->status ==0)
            
        <ol class="progtrckr" data-progtrckr-steps="5">
                    <li class="progtrckr-done">Pending</li>
                    <!--
                -->
                    <li class="progtrckr-todo">Approved</li>
                    <!--
                -->
                    <li class="progtrckr-todo">Read-to-Approved</li>
                    <!--
                -->
                    <li class="progtrckr-todo">Delivering</li>
                    <!--
                -->
                    <li class="progtrckr-todo">Canceled</li>
                    <li class="progtrckr-todo">Delivered</li>
        </ol>
    @elseif ($order->status ==1)
        <ol class="progtrckr" data-progtrckr-steps="5">
            <li class="progtrckr-done">Pending</li>
                                <!--
                                            -->
            <li class="progtrckr-done">Approved</li>
                                <!--
                                            -->
            <li class="progtrckr-todo">Read-to-Approved</li>
                                <!--
                                            -->
                                <li class="progtrckr-todo">Delivering</li>
                                <!--
                                            -->
                                <li class="progtrckr-todo">Canceled</li>
                                <li class="progtrckr-todo">Delivered</li>
                            </ol>
    @elseif ($order->status ==1)
            <ol class="progtrckr" data-progtrckr-steps="5">
                <li class="progtrckr-done">Pending</li>
                <!--
                            -->
                <li class="progtrckr-done">Approved</li>
                <!--
                            -->
                <li class="progtrckr-done">Read-to-Approved</li>
                <!--
                            -->
                <li class="progtrckr-todo">Delivering</li>
                <!--
                            -->
                <li class="progtrckr-todo">Canceled</li>
                <li class="progtrckr-todo">Delivered</li>
            </ol>
    @elseif ($order->status ==2)
                <ol class="progtrckr" data-progtrckr-steps="5">
                                <li class="progtrckr-done">Pending</li>
                                <!--
                                            -->
                                <li class="progtrckr-done">Approved</li>
                                <!--
                                            -->
                                <li class="progtrckr-done">Read-to-Approved</li>
                                <!--
                                            -->
                                <li class="progtrckr-done">Delivering</li>
                                <!--
                                            -->
                                <li class="progtrckr-todo">Canceled</li>
                                <li class="progtrckr-todo">Delivered</li>
                </ol>

    @elseif ($order->status ==3)
                            <ol class="progtrckr" data-progtrckr-steps="5">
                                <li class="progtrckr-done">Pending</li>
                                <!--
                                                                        -->
                                <li class="progtrckr-done">Approved</li>
                                <!--
                                                                        -->
                                <li class="progtrckr-done">Read-to-Approved</li>
                                <!--
                                                                        -->
                                <li class="progtrckr-done">Delivering</li>
                                <!--
                                                                        -->
                                <li class="progtrckr-done">Canceled</li>
                                <li class="progtrckr-todo">Delivered</li>
                            </ol>
            @elseif ($order->status ==4)
                        <ol class="progtrckr" data-progtrckr-steps="5">
                            <li class="progtrckr-done">Pending</li>
                            <!--
                                                                    -->
                            <li class="progtrckr-done">Approved</li>
                            <!--
                                                                    -->
                            <li class="progtrckr-done">Read-to-Approved</li>
                            <!--
                                                                    -->
                            <li class="progtrckr-done">Delivering</li>
                            <!--
                                                                    -->
                            <li class="progtrckr-done">Canceled</li>
                            <li class="progtrckr-todo">Delivered</li>
                        </ol>
                @elseif ($order->status ==5)
                            <ol class="progtrckr" data-progtrckr-steps="5">
                                <li class="progtrckr-done">Pending</li>
                                <!--
                                                                        -->
                                <li class="progtrckr-done">Approved</li>
                                <!--
                                                                        -->
                                <li class="progtrckr-done">Read-to-Approved</li>
                                <!--
                                                                        -->
                                <li class="progtrckr-done">Delivering</li>
                                <!--
                                                                        -->
                                <li class="progtrckr-done">Canceled</li>
                                <li class="progtrckr-done">Delivered</li>
                            </ol>
            @endif --}}
 
<div class="grid grid-cols-2 gap-4 mt-5">
    <div class="col">

        <div class="bg-white shadow overflow-hidden sm:rounded-lg border-2">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-md text-gray-600 leading-6 font-medium text-gray-900">
                    Product Info
                </h3>

            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                            {{ $order->product->name_en }}
                        </dd>
                       
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Prce
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    
                            {{ $order->product->price }}
                        </dd>
                    </div>
                 
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Qty
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->quantity }}
                        </dd>
                    </div>


                </dl>
                <div class="flex justify-end mb-3 mr-3">
                    <h1 class="text-gray-500 mr-3">Total : </h1>
                    {{ $order->amount }}
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="bg-white shadow border-2 overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Order Info
                </h3>

            </div>
            <div class="border-2 border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Customer Name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->user->name }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
    
                        <dt class="text-sm font-medium text-gray-500">
                            User Name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ Auth::user()->name }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Phone
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->phone }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->address }}
                        </dd>
                    </div>

                </dl>
            </div>
        </div>
    </div>



</div>


    @endsection