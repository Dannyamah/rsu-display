<x-app-layout>

    <div class="content-body">
        <!-- row -->
        
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Messages To Display</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('message.update', $display) }}" method="POST">  @csrf
                                    @foreach ($errors->all() as $err)
                                    <p class="text-danger text-center">{{ $err }}</p>
                                    @endforeach
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Message</label>
                                            <input type="text" name="message" class="form-control" placeholder="{{$display->message}}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</x-app-layout>