@extends('welcome')
@section('content')




    @if(Session::has('message'))
        <div class="row mySection1">
            <div class="col-md-12 bg-success text-white">
                {{ Session::get('message') }}
            </div>
        </div>
    @endif

    <div class="row mySection1">
        <div class="col-md-7 col-sm-12 myleftImageColumn">
            <div class="myfirstSectionImage" style="background-image: url('images/beeimg.jpg');">
            </div>

            <h1 class="heading my-3">Save the bees</h1>
            <p class="mb-3">To: European Commission</p>
            <h2 class="heading my-3">Petition</h2>

            <div class="textSection p-4">
                <p class="fs-18">
                    We, the signatories of this petition, call on the Commission to propose legal acts for the
                    phasing
                    out of synthetic pesticides by 2035, to restore biodiversity and to support farmers in the
                    transition to agriculture without dangerous pesticides.<br><br>

                    We demand:
                    <br><br>
                    ◾ the elimination of synthetic pesticides in EU agriculture by 80% by 2030, starting with the
                    most
                    dangerous, and their total elimination by 2035;
                    <br><br>
                    ◾ restoring natural ecosystems in agricultural areas, so that agriculture becomes a vector of
                    biodiversity recovery;
                    <br><br>
                    ◾ reforming agriculture by prioritizing small-scale, diverse and sustainable agriculture, as
                    well as
                    supporting research in the field of pesticide-free agriculture and Genetically Modified
                    Organisms
                </p>


            </div>
            <h2 class="heading my-3">Why is it important?</h2>
            <p class="my-3">
                <b>The bees die. If the bees die, we will die too.</b>
                <br><br>


                The big pesticide producers don't seem to understand the danger we are in. Huge companies like
                Bayer-Monsanto are doing everything to increase their sales and are forcing farmers to use their
                products. In order not to go bankrupt in this intensive system of industrial agriculture, farmers
                are obliged to use even those pesticides that kill bees.
                <br><br>


                <b>Bees pollinate a third of the food we eat.</b>Fruits, vegetables and crops that feed animals need
                the existence of bees. <b>Without them, there would be literally no food.</b>
                <br><br>


                <b>We call for the phasing out of all pesticides.</b> It is not an easy task to accomplish, but if
                more than ONE MILLION of us sign, the EU Commission and our MEPs will be legally obliged to listen
                to us.
                <br><br>


                It is clear that our politicians are beginning to take our requirements into account. Following
                calls from millions of Europeans, the EU has agreed to an almost total ban on neonicotinoids, a
                specific type of pesticide that harms bees' central nervous system. The EU has also decided not to
                renew its license for thiacloprid, another very dangerous pesticide.
                <br><br>


                <b>But it is not enough to ban individual types of pesticides!</b> Our public resources should fund
                research to enable organic farming to thrive and bees to survive. We also need to bring dying
                ecosystems back to life. To do this, <b>we must completely eliminate synthetic pesticides and invest
                    considerably in restoring the natural balance.</b>
                <br><br>


                There is no room for negotiation, the Commission has to choose between our survival and the profit
                of the big pesticide companies. They will do it, they have nowhere to go. But it's just as important
                to do it as soon as possible, before it's too late. Hundreds of thousands of signatures have already
                been collected in Europe, now is the time for Romania to contribute as well.
                <br><br>


                As this campaign is an initiative of European citizens, you will need to enter the details into a
                two-step process. ICE is an official EU petition, so it requires more information than Declic
                requests when signing a petition. Please complete the ICE form in full for your signature to be
                considered and verified by the national government. national government.
                <br><br>
            </p>
        </div>
        <div class="col-md-5">
            <div class="p-3" style="background:#eaeae8;">
                <form action="{{ URL::to('save') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="form-group">
                                <label for="inputFN" class="myLabelStyle">Full name:</label>
                                <input type="text" class="form-control px-2" id="inputFN"
                                    name="full_name" aria-describedby="emailHelp" name="full_name">
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="form-group">
                                <label for="inputSN" class="myLabelStyle">Surname:</label>
                                <input type="text" class="form-control px-2" id="inputSN"
                                    name="sur_name" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                    <div class="form-group px-2 pb-2">
                        <label for="inputEmail" class="myLabelStyle">Email:</label>
                        <input type="email" class="form-control px-2" id="inputEmail" name="email" aria-describedby="emailHelp"
                            placeholder="qwerty@mail.com">
                    </div>
                    <div class="form-group px-2 pb-2">
                        <label for="inputCD" class="myLabelStyle">County / Diaspora:</label>
                        <select class="form-control px-2" id="inputCD" name="country">
                            <option value="" disabled selected>(required)</option>
                            <option value="Diaspora">Diaspora</option>
                            <option value="Alba">Alba</option>
                            <option value="Arad">Arad</option>
                            <option value="Argeș">Argeș</option>
                            <option value="Bacău">Bacău</option>
                            <option value="Bihor">Bihor</option>
                            <option value="Bistrița-Năsăud">Bistrița-Năsăud</option>
                            <option value="Botoșani">Botoșani</option>
                            <option value="București">București</option>
                            <option value="Brăila">Brăila</option>
                            <option value="Brașov">Brașov</option>
                            <option value="Buzău">Buzău</option>
                            <option value="Călărași">Călărași</option>
                            <option value="Caraș-Severin">Caraș-Severin</option>
                            <option value="Cluj">Cluj</option>
                            <option value="Constanța">Constanța</option>
                            <option value="Covasna">Covasna</option>
                            <option value="Dâmbovița">Dâmbovița</option>
                            <option value="Dolj">Dolj</option>
                            <option value="Galați">Galați</option>
                            <option value="Giurgiu">Giurgiu</option>
                            <option value="Gorj">Gorj</option>
                            <option value="Harghita">Harghita</option>
                            <option value="Hunedoara">Hunedoara</option>
                            <option value="Ialomița">Ialomița</option>
                            <option value="Iași">Iași</option>
                            <option value="Ilfov">Ilfov</option>
                            <option value="Maramureș">Maramureș</option>
                            <option value="Mehedinți">Mehedinți</option>
                            <option value="Mureș">Mureș</option>
                            <option value="Neamț">Neamț</option>
                            <option value="Olt">Olt</option>
                            <option value="Prahova">Prahova</option>
                            <option value="Satu Mare">Satu Mare</option>
                            <option value="Sălaj">Sălaj</option>
                            <option value="Sibiu">Sibiu</option>
                            <option value="Suceava">Suceava</option>
                            <option value="Teleorman">Teleorman</option>
                            <option value="Timiș">Timiș</option>
                            <option value="Tulcea">Tulcea</option>
                            <option value="Vaslui">Vaslui</option>
                            <option value="Vâlcea">Vâlcea</option>
                            <option value="Vrancea">Vrancea</option>
                        </select>
                    </div>
                    <div class="form-group px-2 pb-2">
                        <label for="inputPN" class="myLabelStyle">Phone:</label>
                        <input type="number" class="form-control px-2" id="inputPN" name="phone" aria-describedby="emailHelp"
                            placeholder="0777123456 (optional)">
                    </div>

                    <div class="form-group px-2 py-2">

                        <div class="mb-2">
                            Yes, I care and want to receive email or phone news about this campaign and other
                            Declic community initiatives
                        </div>


                        <input type="radio" id="yes" name="yesorno" value="1">
                          <label for="yes" class="myLabelStyle">Yes</label>
                          <input type="radio" id="no" name="yesorno" value="0">
                          <label for="no" class="myLabelStyle">No</label><br>

                    </div>

                    <div class="form-group px-2 py-2">
                        <input type="checkbox" class="acceptpp" id="myacceptpp">
                        <label class="acceptpp d-inline" for="myacceptpp">I accept the privacy policy and the terms
                            of use of
                            the
                            site</label>
                    </div>

                    <div class="d-flex justify-content-center px-2 my-5">
                        <button class="btn btn-spetition px-4 py-4">Sign the petition</button>
                    </div>
                    <div class="px-2 my-3">
                        <p>
                            Declic complies with GDPR requirements. Your personal data will be kept secure. Declic
                            does
                            not
                            trade contact details or any information about its members. We will only contact you,
                            only
                            when
                            your involvement is necessary for the causes you care about. Read our <a href="#"
                                style="color:green !important;">privacy
                                policy</a> for
                            more
                            information.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

   

</div>



@endsection