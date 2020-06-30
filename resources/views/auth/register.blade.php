@extends('front.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                             <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                                 <div class="col-md-6">
                                     <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                         @error('firstname')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                              </span>
                                         @enderror
                                  </div>
                        </div>

                        <div class="form-group row">
                             <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}</label>

                                 <div class="col-md-6">
                                     <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus>

                                         @error('pays')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                              </span>
                                         @enderror
                                  </div>
                        </div>

                        <div class="form-group row">
                             <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Région / Province') }}</label>

                                 <div class="col-md-6">
                                     <input id="province" type="text" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}" required autocomplete="province" autofocus>

                                         @error('province')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                              </span>
                                         @enderror
                                  </div>
                        </div>

                       <div class="form-group row">
                            <label for="departement" class="col-md-4 col-form-label text-md-right">{{ __('Departement') }}</label>

                                <div class="col-md-6">
                                    <input id="departement" type="text" class="form-control @error('departement') is-invalid @enderror" name="departement" value="{{ old('departement') }}" required autocomplete="departement" autofocus>

                                        @error('departement')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                        @enderror
                                 </div>
                       </div>

                       <div class="form-group row">
                            <label for="village" class="col-md-4 col-form-label text-md-right">{{ __('Village') }}</label>

                                <div class="col-md-6">
                                    <input id="village" type="text" class="form-control @error('village') is-invalid @enderror" name="village" value="{{ old('village') }}" required autocomplete="village" autofocus>

                                        @error('village')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                        @enderror
                                 </div>
                       </div>

                       <div class="form-group row">
                            <label for="quartier" class="col-md-4 col-form-label text-md-right">{{ __('Quartier') }}</label>

                                <div class="col-md-6">
                                    <input id="quartier" type="text" class="form-control @error('quartier') is-invalid @enderror" name="quartier" value="{{ old('quartier') }}" required autocomplete="quartier" autofocus>

                                        @error('quartier')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                        @enderror
                                 </div>
                       </div>

                       <div class="form-group row">
                            <label for="langue" class="col-md-4 col-form-label text-md-right">{{ __('Langue') }}</label>

                                <div class="col-md-6">
                                    <input id="langue" type="text" class="form-control @error('langue') is-invalid @enderror" name="langue" value="{{ old('langue') }}" required autocomplete="langue" autofocus>

                                        @error('langue')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                        @enderror
                                 </div>
                       </div>

                       <div class="form-group row">
                           <label for="annee_naissance" class="col-md-4 col-form-label text-md-right">{{ __('Annee de naissance') }}</label>

                               <div class="col-md-6">
                                   <input id="annee_naissance" type="text" class="form-control @error('lannee_naissance') is-invalid @enderror" name="annee_naissance" value="{{ old('annee_naissance') }}" required autocomplete="annee_naissance" autofocus>

                                       @error('annee_naissance')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                            </span>
                                       @enderror
                                </div>
                      </div>

                      <div class="form-group row">
                          <label for="entreprise" class="col-md-4 col-form-label text-md-right">{{ __('Entreprise') }}</label>

                              <div class="col-md-6">
                                  <input id="entreprise" type="text" class="form-control @error('entreprise') is-invalid @enderror" name="entreprise" value="{{ old('entreprise') }}" required autocomplete="lentreprise" autofocus>

                                      @error('entreprise')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                           </span>
                                      @enderror
                               </div>
                      </div>

                      <div class="form-group row">
                          <label for="poste" class="col-md-4 col-form-label text-md-right">{{ __('Poste') }}</label>

                              <div class="col-md-6">
                                  <input id="poste" type="text" class="form-control @error('poste') is-invalid @enderror" name="poste" value="{{ old('poste') }}" required autocomplete="poste" autofocus>

                                      @error('poste')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                           </span>
                                      @enderror
                               </div>
                     </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
