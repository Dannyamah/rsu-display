<x-app-layout>

    <div class="content-body">
        <!-- row -->
        
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Static Messages To Display</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('static.submit') }}" method="POST">  @csrf
                                    @foreach ($errors->all() as $err)
                                    <p class="text-danger text-center">{{ $err }}</p>
                                    @endforeach
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Static Message</label>
                                            <input type="text" name="static_message" class="form-control" placeholder="Type your Message Here">
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