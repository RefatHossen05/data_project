@extends('frontend.master')

@section('content')
<section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
        Appointment Form
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
          <form action="{{route('appointment.submit')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-1">
                    <label for="patient_name" class="mb-1">
                        <strong> Patient Name</strong></label>
                    <input type="text" name="patient_name" id="patient_name" class="form-control" placeholder="Place Enter Your name">
                </div>  


                <div class="form-group mb-1">
                    <label for="Doctor_name" class="mb-1">
                    <strong>Chose Doctor:</strong>
                    </label>
                    <select name="doctor_id" id="Doctor_name" class="form-control form-select">
                    @foreach($doctoros as $doctor)
                        <option value="{{$doctor->id}}">
                        {{$doctor->doctorname}}({{$doctor->dpt}})
                        </option>
                    @endforeach
                    </select>
                




                <div class="form-group mb-1">
                    <label for="date" class="mb-1">
                        <strong>Date of Serial</strong>
                    </label>
                    <input type="text" name="date" id="date" class="form-control" >
                </div>

                <div class="form-group mb-1 text-center">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-12">
          <div class="map_container">
            <div class="map">
              <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.225675215452!2d91.1789148!3d23.452322799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547f27d45b4983%3A0x4fee518e7ce8a066!2sLabaid%20Ltd.%20Diagnostic%2C%20Cumilla%20Branch!5e0!3m2!1sbn!2sbd!4v1674623147838!5m2!1sbn!2sbd" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection