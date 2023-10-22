{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


<x-app-layout>

    <div class="content-body">

        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Widget</a></li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="card-title">All Messages</h4>
                        </div>
                        <div class="card-body">
                            <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370">
                                <ul class="timeline">
                                    @foreach ($displays as $display)
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>{{ $display->created_at }}</span>
                                                <h6 class="mb-0">{{$display->message}}</h6>

                                                @if (Auth::user()->role == 'admin')
                                                <div class="message-actions float-right">
                                                    <!-- Edit button -->
                                                    <a href="{{ route('message.edit', $display) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    
                                                    <!-- Delete button -->
                                                    <form action="{{ route('message.destroy', $display) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this message?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </div>
                                                @else
                                                    
                                                @endif

                                                
                                            </a>
                                        </li>
                                        @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- To test the API --}}
            {{-- <div id="message"></div> --}}
        </div>  

</x-app-layout>