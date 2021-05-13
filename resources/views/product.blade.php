<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
    @foreach($data as $value)
    <form action="{{route('product.post',['id'=>$value['id']])}}" method="POST">
                                        {{@csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <h1>{{$value['name']}}</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">LIKE</button>
                                      
                                    </form>
    <button type="submit" class="btn btn-danger">DISLIKE</button>

    @endforeach


</div>