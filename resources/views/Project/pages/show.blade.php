@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <!-- Project info -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nom du projet</div>
                    <div class="card-body">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <video controls class="d-block w-100">
                                        <source src="{{ asset('videos/demo.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="carousel-item">
                                    <video controls class="d-block w-100">
                                        <source src="{{ asset('videos/demo.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="row" style="line-height: 10px">
                                <div class="col-md-6">
                                    <p><strong>Budget Maximum : &nbsp;&nbsp;&nbsp;</strong>50000 DH</p>
                                    <p><strong>Budget Maximum : &nbsp;&nbsp;&nbsp;</strong> 500000 DH</p>
                                    <p><strong>Superficie de projet : &nbsp;&nbsp;&nbsp; </strong>5000 M²</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Budget Maximum : &nbsp;&nbsp;&nbsp;</strong> 50000 DH</p>
                                    <p><strong>Budget Maximum : &nbsp;&nbsp;&nbsp;</strong> 500000 DH</p>
                                    <p><strong>Superficie de projet : &nbsp;&nbsp;&nbsp;</strong> 5000 M²</p>
                                </div>
                            </div>
                            <p><strong>Description du projet</strong></p>
                            <p style="color: #b2b2b2">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- User info -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8 mt-3">
                                <strong>Nom de l'entreprise</strong>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('logo/airbnb.svg') }}" alt="" class="img-fluid mr-5" width="50px" height="50px">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="container">
                                <p><strong>Nom du promoteur :</strong> &nbsp;&nbsp;&nbsp; Habib Karim </p>
                                <p><strong>Site web :</strong> &nbsp;&nbsp;&nbsp; www.nom.com</p>
                                <p><strong>Siège social :</strong> &nbsp;&nbsp;&nbsp; Casablanca</p>
                                <p><strong>Téléphone :</strong> &nbsp;&nbsp;&nbsp; +212675901394</p>
                                <p><strong>Email :</strong> &nbsp;&nbsp;&nbsp; contact@nom.com</p>
                                <p><strong>Addresse postale :</strong> &nbsp;&nbsp;&nbsp; 2500 </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                      <div class="container-fluid">
                          <div style="margin-left: 50px">
                              <a href="{{ route('admin.conversation.show', $user->id) }}" class="btn btn-primary">Contacter</a>
                              <a href="{{ route('project.edit', $project->id) }}" class="btn btn-success">Modifier</a>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
