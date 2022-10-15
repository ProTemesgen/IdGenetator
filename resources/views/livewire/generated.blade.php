<div class = 'container mt-4' style ='border:1px solid;'>
    @foreach($peoples as $people)
        <div>
            <div class="row m-4">
                <div class="col">
                    <div class="container" style = 'border:1px solid gray; border-radius: 5px; padding-top:2rem; padding-bottom:3rem; background-image:url("{{asset('storage/1.png' )}}")'>
                        <h5 style='color:white; margin-bottom:2rem'>Name Of Organization gose hear</h5>
                        <div class="d-flex">
                            <div class = 'container' style = 'width: 6rem;'>
                                <img src="{{asset('storage/' . $people->photo)}}" style = 'width:6rem; height:7rem' alt="image">
                            </div>
                            <div class="container">
                                <div class = 'container' >
                                    <label for="" style = 'font-size:0.7rem; color:Black;'><b>Full Name :</b></label><span style = 'color:gray; font-size:0.9rem'>{{$people->Fname}} {{$people->Mname}}</span><br>
                                    <label for="" style = 'font-size:0.7rem; color:Black;'><b>Phone No  :</b></label><span style = 'color:gray; font-size:0.9rem'> {{$people->phone}}</span><br>
                                    <label for="" style = 'font-size:0.7rem; color:Black;'><b>City      :</b></label><span style = 'color:gray; font-size:0.9rem'>{{$people->city}}</span><br>
                                </div>
                                <div class = 'container'>
                                    <label for="" style = 'font-size:0.7rem; color:black;'><b>Sub City  :</b></label><span style = 'color:gray; font-size:0.9rem'>{{$people->subCity}}</span><br>
                                    <label for="" style = 'font-size:0.7rem; color:black;'><b>Woreda    :</b></label><span style = 'color:gray; font-size:0.9rem'>{{$people->woreda}}</span><br>
                                    <label for="" style = 'font-size:0.7rem; color:black;'><b>House No  :</b></label><span style = 'color:gray; font-size:0.9rem'>{{$people->houseNo}}</span><br>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
                    <div class="col">
                        <div class="container" style = 'border:1px solid gray; border-radius: 5px; padding-top:2rem; padding-bottom:3rem; height:17.6rem; background-image:url("{{asset('storage/2.png' )}}")'>
                    </div>
            </div>
        </div>
    @endforeach
</div>