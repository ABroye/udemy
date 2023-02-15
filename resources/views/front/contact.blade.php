@extends('front_layout.master')

@section('title')
    Contact
@endsection

@section('content')
    <div class="container mb-5">
        <div class="card shadow rounded-0 mb-5">
            <div class="card-header rounded-0">
                <h1>Envoyer un message à l'équipe de RaspDev</h1>
            </div>
            <div class="card-body">
                <form method="post" action="php/contact.php" id="form">
                    <div class="form-group">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="name" placeholder="Insérez vos nom et prénom"
                                class="form-control mb-3" required />
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <input type="email" name="email" placeholder="Insérez votre adresse email"
                                class="form-control mb-3" required />
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="subject" placeholder="Insérez l'objet de votre message"
                            class="form-control mb-3" required />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <textarea name="message" placeholder="Insérez votre message" class="form-control mb-3" required rows="7"></textarea>
                        <button class="btn btn-outline-danger" type="submit" id="submit" name="submit">
                            Envoyer Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection