<style scoped>
h5 {
    background-color: black;
    color: white;
}

h2 {
    color: white;
}

.card-body {
    color: white;
}

.apply {
    background-color: #26b99a;
    color: white;
}
</style>

<template>
    <section>
        <div style="background-color:white;height:685px" class="content">
            <div style="background-color:black;" id="carouselExampleControls" data-interval="9000" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div style="margin:30px;padding-left:290px">
                            <img height="400px" src="/images/poster.jpg" />
                        </div>
                        <div class="card-body" style="padding-left: 300px;">
                            <div style="padding-left: 230px; ">
                                <button  href="#carouselExampleControls" role="button" data-slide="next"  style="margin: auto; width: 30%; padding: 10px; " type="button" class="btn apply btn-lg">Get Started</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img class="d-block w-100" style="max-width: 200px; heigth: auto;" src="/images/presenter.png" alt="First slide" /> -->
                        <div class="center">
                            <a href="javascript:void(0)" @click="openModal('Radio Presenter')"> <img class="d-block w-100" style="max-width: 200px; heigth: auto;" src="/images/presenter.png" /></a>
                            <h2 style="color: white;">Radio Presenter</h2>
                        </div>
                        <div class="card-body" style="padding-left: 300px;">
                            <ul>
                                <li>
                                    <h5>Prepare a 1 minute talk up video for the NRG Play App for NRG Audience.</h5>
                                </li>
                                <li>
                                    <h5>Post your video on your Instagram, Facebook &amp; Twitter accounts using the hashtag #NRGeticMVPs.</h5>
                                </li>
                                <li>
                                    <h5>Copy link of your video as posted on Instagram/Facebook/Twitter and submit on the next page.</h5>
                                </li>
                                <li>
                                    <h5>
                                        Encourage as many people as possible to like, comment and follow your progress on our social media platforms @nrgtv on YouTube,
                                        <br /> @nrgradiokenya Facebook and @nrgradiokenya on Twitter/Instagram.
                                    </h5>
                                </li>
                                <div style="padding-left: 230px; padding-top: 20px;">
                                    <button @click="openModal('Radio Presenter')" style="margin: auto; width: 30%; padding: 10px; " type="button" class="btn apply btn-lg">Apply</button>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="center">
                            <a href="javascript:void(0)" @click="openModal('Podcaster')"> <img class="d-block w-100" style="max-width: 200px; heigth: auto;" src="/images/podcast.png" /></a>
                            <h2>Podcaster</h2>
                        </div>
                        <div class="card-body" style="padding-left: 400px;">
                            <ul>
                                <li>
                                    <h5>
                                        Create a 5 minute native and original podcast in any area of interest
                                    </h5>
                                </li>
                                <li>
                                    <h5>Post your podcast on your Instagram, Facebook &amp; Twitter accounts using the hashtag #NRGeticMVPs.</h5>
                                </li>
                                <li>
                                    <h5>
                                        Copy link of your video as posted on Instagram/Facebook/Twitter and submit on the next page.
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        Encourage as many people as possible to like, comment and follow your progress on our social media platforms @nrgtv on YouTube, @nrgradiokenya Facebook and @nrgradiokenya on Twitter/Instagram.
                                    </h5>
                                </li>
                                <div style="padding-left: 230px; padding-top: 20px;">
                                    <button @click="openModal('Podcaster')" style="margin: auto; width: 30%; padding: 10px;" type="button" class="btn apply btn-lg">Apply</button>
                                </div>
                            </ul>
                        </div>
    
                    </div>
                    <div class="carousel-item">
                        <div class="center">
                            <a href="javascript:void(0)" @click="openModal('Content Creator')"> <img class="d-block w-100" style="max-width: 200px; heigth: auto;" src="/images/contentCreator.png" /></a>
                            <h2>Content Creator</h2>
                        </div>
                        <div class="card-body" style="padding-left: 400px;">
                            <ul>
                                <li>
                                    <h5>
                                        Create a 1 minute native Video talking about NRG Play App for Choice Audience.
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        Post your video on your Instagram, Facebook &amp; Twitter accounts using the hashtag #NRGeticMVPsicMVPs.
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        Copy link of your video as posted on Instagram/Facebook/Twitter and submit on the next page.
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        Encourage as many people as possible to like, comment and follow your progress on our social media platforms @nrgtv on YouTube, @nrgradiokenya Facebook and @nrgradiokenya on Twitter/Instagram.
                                    </h5>
                                </li>
                            </ul>
                            <div style="padding-left: 230px; padding-top: 20px;">
                                <button @click="openModal('Content Creator')" style="margin: auto; width: 30%; padding: 10px;" type="button" class="btn apply btn-lg">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="center">
                            <a href="javascript:void(0)" @click="openModal('Radio Dj')"> <img class="d-block w-100" style="max-width: 200px; heigth: auto;" src="/images/radioDj.png" /></a>
                            <h2>Radio Dj</h2>
                        </div>
                        <div class="card-body" style="padding-left: 400px;">
                            <ul>
                                <li>
                                    <h5>
                                        Prepare a 3-minute Hot Mix for NRG Audience
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        Post your video on your Instagram, Facebook &amp; Twitter accounts using the hashtag #NRGeticMVPs.
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        Copy link of your video as posted on Instagram/Facebook/Twitter and submit on the next page.
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        Encourage as many people as possible to like, comment and follow your progress on our social media platforms @nrgtv on YouTube, @nrgradiokenya Facebook and @nrgradiokenya on Twitter/Instagram.
                                    </h5>
                                </li>
                            </ul>
                            <div style="padding-left: 230px; padding-top: 20px;">
                                <button @click="openModal('Radio Dj')" style="margin: auto; width: 30%; padding: 10px;" type="button" class="btn apply btn-lg">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="center">
                            <a href="javascript:void(0)" @click="openModal('Creative Business Proposal Writer')"> <img class="d-block w-100" style="max-width: 200px; heigth: auto;" src="/images/proposalWriter.png" /></a>
                            <h2>Creative Business Proposal Writer</h2>
                        </div>
                        <div class="card-body" style="padding-left: 400px;">
                            <h5>Work on a creative proposal</h5>
                            <ul>
                                <li>
                                    <h5>seeking sponsorship for NRG Wave event from a company of your choice</h5>
                                </li>
                                <li>
                                    <h5>seeking a company of choice to advertise on NRG Radio</h5>
                                </li>
                            </ul>
                            <h5>NB:- We’re looking for the most creative, well presented, well written, interesting and disruptive proposal that can have companies sponsor NRG Turn up</h5>
                            <div style="padding-left: 230px; padding-top: 20px;">
                                <button @click="openModal('Creative Business Proposal Writer')" style="margin: auto; width: 30%; padding: 10px;" type="button" class="btn apply btn-lg">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="center">
                            <a href="javascript:void(0)" @click="openModal('Creative Designers')"> <img class="d-block w-100" style="max-width: 200px; heigth: auto;" src="/images/creativeDesigners.png" /></a>
                            <h2>Creative Designers</h2>
                        </div>
                        <div class="card-body" style="padding-left: 400px;">
                            <h5>Work on creative posters for ;-</h5>
                            <ul>
                                <li>
                                    <h5>NRG Play App</h5>
                                </li>
                                <li>
                                    <h5>A proposal template for NRG Radio</h5>
                                </li>
                            </ul>
                            <h5>NB:- We’re looking for the most creative, well presented, well written, interesting and disruptive proposal that can have companies sponsor NRG Turn up</h5>
                            <div style="padding-left: 230px; padding-top: 20px;">
                                <button @click="openModal('Creative Designers')" style="margin: auto; width: 30%; padding: 10px;" type="button" class="btn apply btn-lg">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="center">
                            <a href="javascript:void(0)" @click="openModal('Social Media Managers')"> <img class="d-block w-100" style="max-width: 200px; heigth: auto;" src="/images/socialMediaManagers.png" /></a>
                            <h2>Social Media Managers</h2>
                        </div>
                        <div class="card-body" style="padding-left: 400px;">
                            <h5>Work on a content schedule/calendar including actual posts and captions for</h5>
                            <ul>
                                <li>
                                    <h5>A campaign pushing NRG Play App for a week</h5>
                                </li>
                                <li>
                                    <h5>A campaign pushing NRG Turn up for a week</h5>
                                </li>
                            </ul>
                            <div style="padding-left: 230px; padding-top: 20px;">
                                <button @click="openModal('Social Media Managers')" style="margin: auto; width: 30%; padding: 10px;" type="button" class="btn apply btn-lg">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="center">
                            <a href="javascript:void(0)" @click="openModal('Sales Executives')"> <img class="d-block w-100" style="max-width: 200px; heigth: auto;" src="/images/saleExcutive.png" /></a>
                            <h2>Sales Executives</h2>
                        </div>
                        <div class="card-body" style="padding-left: 400px;">
                            <h5>Work on a content schedule/calendar including actual posts and captions for</h5>
                            <ul>
                                <li>
                                    <h5>Work on a proposal selling NRG Radio to a potential advertiser of choice</h5>
                                </li>
                                <li>
                                    <h5>Work on a proposal selling NRG Wave to a potential sponsor of choice</h5>
                                </li>
                            </ul>
                            <h5>
                                We’re looking for the most creative, well presented, well written, interesting and disruptive proposal, confidence and presentation skills that can have companies buy into your idea to advertise with NRG or sponsor NRG Wave Event
                            </h5>
                            <div style="padding-left: 230px; padding-top: 20px;">
                                <button @click="openModal('Sales Executives')" style="margin: auto; width: 30%; padding: 10px;" type="button" class="btn apply btn-lg">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="center">
                            <a href="javascript:void(0)" @click="openModal('Web Developers')"> <img class="d-block w-100" style="max-width: 200px; heigth: auto;" src="/images/webDevelpers.png" /></a>
                            <h2>Web Developers</h2>
                        </div>
                        <div class="card-body" style="padding-left: 400px;">
                            <h5>Work on a content schedule/calendar including actual posts and captions for</h5>
                            <ul>
                                <li>
                                    <h5>
                                        Work on a replica web platform as nrg.radio/mvp
    
                                        <b>NB:</b> One should be able to submit a profile picture, personal details and file/video
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        Work on a dashboard to view the submissions from 1 above
    
                                        <b>NB:</b> We’re looking for the most creative, well presented platform
                                        <p>Upload your work on the next page</p>
                                    </h5>
                                </li>
                            </ul>
                            <h5>
                                We’re looking for the most creative, well presented, well written, interesting and disruptive proposal, confidence and presentation skills that can have companies buy into your idea to advertise with NRG or sponsor NRG Wave Event
                            </h5>
                            <div style="padding-left: 230px; padding-top: 20px;">
                                <button @click="openModal('Web Developers')" style="margin: auto; width: 30%; padding: 10px;" type="button" class="btn apply btn-lg">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
            </div>
        </div>
    
        <div>
            <div id="modal" style="height: 500px;" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div style="background-color:white;" class="block-header ">
                                <h3 style="color:black" class="block-title">Apply for {{position}} </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                    <i class="si si-close"></i>
                                                </button>
                                </div>
                            </div>
                            <!-- <div class="block-header">
                                                <h3 class="block-title">Apply for {{position}} at NRG</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn block-option" data-dismiss="modal" aria-label="Close">
                                                        <i class="si si-close"></i>
                                                    </button>
                                                </div>
                                            </div> -->
                            <div style="background-color: black;" class="block-content">
                                <div class="row m-4">
                                    <div class="col-md-6">
                                        <div class="card" style="width: 18rem; height: 200px; background-color: black;">
                                            <router-link :to="{ name: 'apply', params: { station: 'NRG' , position:position }}"><img class="card-img-top" src="/images/nrgPoster.png" alt="Card image cap" />
                                            </router-link>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card" style="width: 18rem; background-color: black;">
                                            <router-link :to="{ name: 'apply', params: { station: 'Fun X' , position:position }}"><img class="card-img-top" src="/images/fuxPoster.png" alt="Card image cap" /></router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<script>
export default {
    data() {
        return {
            position: ''
        }
    },
    methods: {
        openModal(position) {
            $('#modal').modal('show');
            this.position = position
        }
    }
}
</script>
