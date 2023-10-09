@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-12">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6900.688162038423!2d31.2509435656221!3d30.14157720374212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14586b9fbd1c11cf%3A0xfe9f6cd53676c141!2sZamzam%20Hospital!5e0!3m2!1sen!2seg!4v1664319316647!5m2!1sen!2seg"
        width="100%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>



    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Get in touch</h1>
            <p class="fw-light fs-4">Questions to ask? Fill out the form to contact me directly</p>
        </div>

        <div class="col-lg-6 col-md-12 m-auto mt-5">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <div class="input-group mb-3">
                    <i class="bi bi-envelope input-group-text" id="basic-addon1"></i>
                    <input type="text" class="form-control" placeholder="Username" id="exampleFormControlInput1" aria-label="Username" aria-describedby="basic-addon1">
                    <i class="bi bi-question-circle input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"></i>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 m-auto">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <div class="input-group mb-3">
                    <i class="bi bi-person-fill input-group-text" id="basic-addon1"></i>
                    <input type="text" class="form-control" placeholder="Username" id="exampleFormControlInput1" aria-label="Username" aria-describedby="basic-addon1">
                    <i class="bi bi-question-circle input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 m-auto">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">What is your question about</label>
                <div class="input-group mb-3">
                    <i class="bi bi-chat-left-dots input-group-text" id="basic-addon1"></i>
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Pricing query</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-6 m-auto">
            <div>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Your query"></textarea>
            </div>           
        </div>
        <div class="col-lg-12 m-auto text-center mt-5 justify-content-center">             
            <button type="button" class="btn btn-secondary">Submit</button>          
        </div>
    </div>
    
        
</div>
@endsection