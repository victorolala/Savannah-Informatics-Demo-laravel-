<!-- Edit -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #434e65;
	width: 525px;
}
.modal-confirm .modal-content {
	padding: 20px;
	font-size: 16px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	background: #ffffff;
	border-bottom: none;   
	position: relative;
	text-align: center;
	margin: -20px -20px 0;
	border-radius: 5px 5px 0 0;
	padding: 15px;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 36px;
	margin: 10px 0;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: 15px;
	right: 15px;
    width: 30px;
    height: 30px;
    background: #31344d;
    border-radius: 100%;
	color: #ffffff;
	text-shadow: none;
	opacity: 0.5;
}
.modal-confirm .close:hover {
	opacity: 0.8;
}
.modal-confirm .icon-box {
	color: #fff;		
	width: 95px;
	height: 95px;
	display: inline-block;
	border-radius: 50%;
	z-index: 9;
	border: 5px solid #fff;
	padding: 15px;
	text-align: center;
}
.modal-confirm .icon-box i {
	font-size: 64px;
	margin: -4px 0 0 -4px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #31344d !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border-radius: 30px;
	margin-top: 10px;
	padding: 6px 20px;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #320f00 !important;
	outline: none;
}
.modal-confirm .btn span {
	margin: 1px 3px 0;
	float: left;
}
.modal-confirm .btn i {
	margin-left: 1px;
	font-size: 20px;
	float: right;
}
.trigger-btn {
	display: inline-block;
	margin: 30px auto;
}
</style>
</head>
<body>
{{-- <div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Success Modal</a>
</div> --}}

<!-- Modal HTML -->
<div id="edit{{ $service->id }}" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				
                <img class="img-fluid" src="..\files\assets\images\logo.jpg" alt="Minet Kenya" width="55%">
                    {{-- @php
                    $id=$service->id;
                    $data= DB::table('services')                                                
                        ->where('services.id', $id)
                        ->get();
                    @endphp
                    <h5>
                        @foreach ($data as $name)
                         {{ $name->name }}
                        @endforeach
                        </h5> --}}
                        
				
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
               
				
               
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                               
                                <div class="card-block">
                                    <form method="POST" action="{{ route('service_update', $service->id) }}">
                                        
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label class="form-check-label" for="fname">Consumer Name</label>
                                                <input type="text" class="form-control" name="fname" id="fname" value="{{ $service->name }}" required>
                                            </div>
                                        </div>
                                     
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label class="form-check-label" for="fname">Consumer email</label>
                                                <input type="email" class="form-control" name="email" id="email" value="{{ $service->email }}" required>
                                            </div>
                                           
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label class="form-check-label" for="fname">Service Name</label>
                                                <input type="text" class="form-control" name="service" id="service" placeholder="{{ $service->service }}" value="{{ $service->service }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="form-check-label" for="fname">Amount</label>
                                                <input type="text" class="form-control" name="amount" id="amount" placeholder="{{ $service->amount }}" value="{{ $service->amount}}" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-check-label" for="fname">Currency</label>
                                                <select class="form-control font-weight-bold" name="currency" id="currency" required>                                                                        
                                                    <option value="{{ $service->currency }}" selected>{{ $service->currency }}</option>
                                                    <option value="KES">KES</option>
                                                    <option value="USD">USD</option>
                                                    <option value="EUR">EUR</option>
                                                    <option value="CHF">CHF</option>
                                                    
                                                </select>
                                            </div>
                                       
                                            <div class="col-sm-12">
                                                <label class="form-check-label" for="fname">Renewal Period</label>
                                                <select class="form-control" name="period" id="period"  required>
                                                    @php
                                                        if($service->period = 30){
                                                            $serviceperiod='Monthly';
                                                        }elseif($service->period = 90){
                                                            $serviceperiod='Quaterly';
                                                        }elseif($service->period = 180){
                                                            $serviceperiod='Half a Year';
                                                        }else{
                                                            $serviceperiod='Annually';
                                                        }
                                                    @endphp
                                                    <option selected value="{{ $service->period }}">{{ $serviceperiod }}</option>
                                                    <option value="30">Monthly</option>
                                                    <option value="90">Quaterly</option>
                                                    <option value="180">Half a Year</option>
                                                    <option value="365">Annually</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">

                                            <div class="col-sm-12">
                                                <label class="form-check-label" for="fname">Purchased Date</label>
                                                <input id="dropper-default" class="form-control" name="pdate"  type="date" placeholder="{{ $service->purchased_date }}" required>
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="form-control btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>

                            <!-- Input Alignment card end -->
                        </div>
                    </div>               
				
			</div>
		</div>
	</div>
</div>     
</body>
</html>  
{{-- <div class="md-modal md-effect-11" id="edit{{ $service->id }}">
    <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
            <p>This is a modal window. You can do the following things with it:</p>
            <ul>
                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                <li><strong>Close:</strong> click on the button below to close the modal.</li>
            </ul>
            <button type="button" class="btn btn-primary waves-effect md-close">Close</button>
        </div>
    </div>
</div> --}}
{{-- <div class="modal fade" id="edit{{ $service->id }}">
    <div class=" modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            @php
            $id=$service->id;
            $data= DB::table('services')                                                
                ->where('services.id', $id)
                ->get();
            @endphp
            <h4 class="modal-title"><b>Update service
                @foreach ($data as $name)
                 <small class="font-weight-bold">{{ $name->name }}</small>
                @endforeach
                </b></h4>
            <div class="modal-body text-left">
                <form class="form-horizontal" method="POST" action="">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">                     


                        <div class="bootstrap-timepicker">
                           
                            <input type="hidden" class="form-control timepicker" id="employee_id" name="employee_id"
                                value="{{ $service->id}}">
                        </div>

                    </div>
              
                   
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

    
   
