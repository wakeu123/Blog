@extends('front.layouts.master')

<!-- Do not display AskUser if displaying headerOnboarding -->

@section('content')
  
<div class="high-section">

  <a class="hs-logo" href=" {{ config('app.name') }} ">
    <img src="#" width="123" height="29" alt="Tchamex">
  </a>

  <a href="{{ route('login') }}" class="btn btn-white-alt header-signin-link hs-signin-link">Se connecter</a>

  <div class="tac hs-actions">
    <a href="{{ route('register') }}" class="easySignup btn btn-secondary btn-fat mbs">S'inscrire gratuitement</a> <br>
    <a href="{{ route('login') }}" class="alreadyMember">Vous avez déjà un compte ? <span>Connectez-vous</span></a>
  </div>

  <div class="slick-photos slick-initialized slick-slider slick-dotted" role="toolbar">

    <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 5052px;"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 1263px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
      <div class="slide-inner bg_7">
        <div class="desc">
          <div class="slide-title">Entrez dans les coulisses des entreprises</div>
          <p class="slide-baseline">Plus de 6 millions d'avis</p>
        </div>
      </div>
    </div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 1263px; position: relative; left: -1263px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
      <div class="slide-inner bg_1">
        <div class="desc">
          <div class="slide-title mbs">Réalisez pleinement votre potentiel</div>
          <p class="slide-baseline">720 000 recruteurs et chefs d'entreprise à contacter</p>
        </div>
      </div>
    </div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide02" style="width: 1263px; position: relative; left: -2526px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
      <div class="slide-inner bg_2">
        <div class="desc">
          <div class="slide-title mbs">Misez sur votre plus beau profil</div>
          <p class="slide-baseline">Votre réseau est déjà sur Viadeo</p>
        </div>
      </div>
    </div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide03" style="width: 1263px; position: relative; left: -3789px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
      <div class="slide-inner bg_3">
        <div class="desc">
          <div class="slide-title">Allez à la rencontre de votre réseau</div>
          <p class="slide-baseline">Echangez avec ceux qui vous aideront <br> à concrétiser vos projets</p>
        </div>
      </div>
    </div></div>
  </div>

    

    

    

  <ul class="slick-dots" style="display: block;" role="tablist">
    <li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00">
    <button type="button" data-role="none" role="button" tabindex="0">1</button></li>
    <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class="">
    <button type="button" data-role="none" role="button" tabindex="0">2</button></li>
    <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02" class="">
    <button type="button" data-role="none" role="button" tabindex="0">3</button></li>
    <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation03" id="slick-slide03" class="">
    <button type="button" data-role="none" role="button" tabindex="0">4</button></li>
  </ul>
  
</div>

</div>

<div id="h-companies" class="pbxl ptxl-s ">
  <h2 class="h2 tac ptn-s">Les entreprises vues de l'intérieur comme si vous y étiez</h2>
  <h3 class="h3 tac mbxl mbn-s">Consultez les avis des employés sur plus de 20 critères d'évaluation</h3>

  <div class="fluid-container pbxl pbn-s">

    <div class="ryc-push-top-companies pal cf pbm-s">
      <div class="mlxl mln-s">
          <p class="sector-text dispi">Secteur d'activité : </p>
          <select class="btn-link top-sector-selector">
              <option value="3">Agriculture</option>
              <option value="20">Alimentation/Boissons/Tabac</option>
              <option value="26">Assurance</option>
              <option value="13">Audit/Conseil</option>
              <option value="4">Automobile</option>
              <option value="2">Aéronautique/Défense</option>
              <option value="5">Banques/Crédit</option>
              <option value="6">Biotechnologie</option>
              <option value="39">Commerce(détail/gros)</option>
              <option value="42">Comptabilité</option>
              <option value="14">Construction/Immobilier</option>
              <option value="16">Education/Formation</option>
              <option value="17">Energie</option>
              <option value="18">Environnement</option>
              <option value="31">Equipement/Produits industriels</option>
              <option value="22">Gouvernement/Services publics</option>
              <option value="24">Hôtellerie/Restauration/Loisir/Tourisme</option>
              <option value="12">Informatique/Électronique</option>
              <option value="27">Internet/Services en ligne</option>
              <option value="28">Investissement</option>
              <option value="30">Juridique/Droit</option>
              <option value="32">Média</option>
              <option value="33">Métaux/Exploitation minière</option>
              <option value="35">Organisations à but non lucratif</option>
              <option value="8">Produits chimiques</option>
              <option value="15">Produits de consommation</option>
              <option value="37">Produits pharmaceutiques</option>
              <option value="1" selected="">Publicité/Marketing</option>
              <option value="25">Ressources humaines</option>
              <option value="23">Santé</option>
              <option value="21">Services financiers</option>
              <option value="7">Services pour sociétés/consommateurs</option>
              <option value="19">Spectacles/Arts</option>
              <option value="41">Transports</option>
              <option value="40">Télécommunications</option>
              <option value="10">Vêtements/Textile</option>
          </select>

      </div>
      <div id="top-companies" class="top-companies--container">
        
            <div>
            
            <script id="top-companies-props" type="application/json">
                
            </script>
            </div>
      </div>
    </div>

    <div class="tac mts mtn-s">
      <a href="http://cm.viadeo.com/fr/companies" class="btn btn-secondary btn-large">
        Trouver l'entreprise idéale
      </a>
        <a href="http://cm.viadeo.com/fr/companies/search" class="dispb mts">Voir l’annuaire des entreprises</a>
    </div>

  </div>
</div>




<div id="h-jobOffers" class="ptxl-s pbxl-s plxs-s prxs-s">

      <div class="header">
        <div class="recruiter fr mrxl prxl">
          <span class="dispb">Vous recrutez ?</span>
          <a class="recruiter-link dispb" href="http://recruiter.viadeo.com/fr/recrutement">
            Publiez une offre d'emploi
          </a>
        </div>
        <h2 class="h2 mlxl plxl">Trouvez l’entreprise qui vous correspond</h2>
        <h3 class="h3 mlxl plxl mbm-s">Plus de 35 000 offres d’emploi proposées par des milliers d’entreprises</h3>
      </div>

  <div class="fluid-container clr">

    <div class="gr mbxl mbn-s">
      <div class="gu gu-1of3">&nbsp;</div>
      <div class="gu gu-last gu-s-1of1">

        <div class="left-inner mbxl plxl pan-s mbn-s">
          <div class="checkpoints mbl-s">

              <div class="gr mbm">
                <div class="gu gu-1of7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13"><path fill="#FFF" fill-rule="evenodd" d="M5.673 6.361L13.048-.05l2.732 3.142-10.473 9.104-1.877-2.16-.045.04L.002 6.182l3.142-2.731 2.53 2.909z"></path></svg>
                </div>
              <div class="gu gu-last">
                <span>Plus besoin de CV, vous pouvez postuler directement depuis votre profil !</span>
              </div>
            </div>

              <div class="gr mbm">
                <div class="gu gu-1of7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13"><path fill="#FFF" fill-rule="evenodd" d="M5.673 6.361L13.048-.05l2.732 3.142-10.473 9.104-1.877-2.16-.045.04L.002 6.182l3.142-2.731 2.53 2.909z"></path></svg>
                </div>
              <div class="gu gu-last">
                <span>Enregistrez des offres, programmez vos alertes emails et suivez vos candidatures</span>
              </div>
            </div>

              <div class="gr">
                <div class="gu gu-1of7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13"><path fill="#FFF" fill-rule="evenodd" d="M5.673 6.361L13.048-.05l2.732 3.142-10.473 9.104-1.877-2.16-.045.04L.002 6.182l3.142-2.731 2.53 2.909z"></path></svg>
                </div>
              <div class="gu gu-last">
                <span>Indiquez vos attentes professionnelles et recevez des opportunités de recrutement</span>
              </div>
            </div>
          </div>

          <div class="companies-who-recruit mbl ptm pbm mls-s mrs-s">
                <div class="gr pal pan-s mlxl-s">
                    <div class="gu gu-1of4 company_thumbnail">
                    <a href="http://cm.viadeo.com/fr/company/rte-reseau-de-transport-d-electricite">
                      <img class="pam" src="./Viadeo.com - Cameroun _ réseau social pour professionnels_files/image(3).png" width="68" height="68">
                    </a>
                    <a href="http://cm.viadeo.com/fr/company/rte-reseau-de-transport-d-electricite">
                    <div class="company-name mbxs">Rte - Réseau De Transport D'électricité</div>
                    <div class="star-container">
                        <div class="on-stars" style="width:83.00000000000001%;">
                          <div class="stars-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg>
                          </div>
                        </div>
                        <div class="off-stars">
                          <div class="stars-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg>
                          </div>
                        </div>
                    </div>
                    <span class="dispib rating">4.2</span>
                    </a>
                    <a class="offers dispb mtxs" href="http://cm.viadeo.com/fr/company/rte-reseau-de-transport-d-electricite">10 offres d'emploi</a>
                  </div>
                    <div class="gu gu-1of4 company_thumbnail">
                    <a href="http://cm.viadeo.com/fr/company/roche-pharma-france">
                      <img class="pam" src="./Viadeo.com - Cameroun _ réseau social pour professionnels_files/image(4).png" width="68" height="68">
                    </a>
                    <a href="http://cm.viadeo.com/fr/company/roche-pharma-france">
                    <div class="company-name mbxs">Roche Pharma France</div>
                    <div class="star-container">
                        <div class="on-stars" style="width:81.99999999999999%;">
                          <div class="stars-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg>
                          </div>
                        </div>
                        <div class="off-stars">
                          <div class="stars-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg>
                          </div>
                        </div>
                    </div>
                    <span class="dispib rating">4.1</span>
                    </a>
                    <a class="offers dispb mtxs" href="http://cm.viadeo.com/fr/company/roche-pharma-france">4 offres d'emploi</a>
                  </div>
                    <div class="gu gu-1of4 company_thumbnail">
                    <a href="http://cm.viadeo.com/fr/company/servier">
                      <img class="pam" src="./Viadeo.com - Cameroun _ réseau social pour professionnels_files/image(5).png" width="68" height="68">
                    </a>
                    <a href="http://cm.viadeo.com/fr/company/servier">
                    <div class="company-name mbxs">Servier</div>
                    <div class="star-container">
                        <div class="on-stars" style="width:71.4%;">
                          <div class="stars-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg>
                          </div>
                        </div>
                        <div class="off-stars">
                          <div class="stars-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg>
                          </div>
                        </div>
                    </div>
                    <span class="dispib rating">3.6</span>
                    </a>
                    <a class="offers dispb mtxs" href="http://cm.viadeo.com/fr/company/servier">2 offres d'emploi</a>
                  </div>
                    <div class="gu gu-last company_thumbnail">
                    <a href="http://cm.viadeo.com/fr/company/selescope">
                      <img class="pam" src="./Viadeo.com - Cameroun _ réseau social pour professionnels_files/image(6).png" width="68" height="68">
                    </a>
                    <a href="http://cm.viadeo.com/fr/company/selescope">
                    <div class="company-name mbxs">Selescope</div>
                    <div class="star-container">
                        <div class="on-stars" style="width:95.6%;">
                          <div class="stars-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#FEAE35" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg>
                          </div>
                        </div>
                        <div class="off-stars">
                          <div class="stars-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"> <path fill="#c5c3c7" fill-rule="evenodd" d="M7.5 11.609L2.865 14l.885-5.065L0 5.348l5.182-.74L7.5 0l2.318 4.609L15 5.348l-3.75 3.587.885 5.065z"></path></svg>
                          </div>
                        </div>
                    </div>
                    <span class="dispib rating">4.8</span>
                    </a>
                    <a class="offers dispb mtxs" href="http://cm.viadeo.com/fr/company/selescope">10 offres d'emploi</a>
                  </div>
              </div>
            </div>

            <div class="tac">
              <a class="btn btn-secondary btn-large dispb" href="http://cm.viadeo.com/fr/jobs" onclick="window.snowplow(&#39;trackStructEvent&#39;, &#39;homepage&#39;, &#39;click&#39;, &#39;JobOffersSection_SeeOffersButton&#39;);">Chercher une offre d'emploi </a>
              <a class="recruitment dispb mts" href="http://cm.viadeo.com/fr/companies/search">Découvrir toutes les entreprises qui recrutent</a>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>


<div id="mobile-section">

  <div class="tac pls-s prs-s">
    <h2 class="h2">Mettez votre réseau (et votre futur boss) dans votre poche</h2>
    <h3 class="h3">Où que vous soyez, les applications mobiles vous accompagnent dans votre vie professionnelle.</h3>
  </div>

  <div class="dld-links">
    <div class="gr bg-fr">
      <div class="gu gu-1of2">
        <a id="googleplay" title="Télécharger sur Google Play" target="_blank" href="http://ad.apps.fm/wrKsmVMNLtEXPPd-n0cNjtf00DPwq1qCdxLUIm_ZAze7le-IqQNrhddG0SS8mx-UEKLULoIrGbcaJ6CMh5BIBtWzeFJB6yeb2DdPJixvRWGdtRbEpJZMPGO91fZTFJtH" class="h-icon googleplay mrxl-s" rel="noopener noreferrer">&nbsp;</a>
      </div>
      <div class="gu gu-last">
        <a id="appstore" title="Télécharger sur App Store" target="_blank" href="http://ad.apps.fm/MpoiVjk0pklWTJjV6MfIsBM8G1T_LUvoWYXredpuoYAm7wf_vHW940ofZPO3tlh-aJz3NEwAHFRRGaIGoX6rA6Nq0cSXWS12TsuzHMa1Ofk" class="h-icon appStore mlxl-s" rel="noopener noreferrer">&nbsp;</a>
      </div>
    </div>
  </div>

  <div class="mobile-picture">&nbsp;</div>

</div>
   
@endsection