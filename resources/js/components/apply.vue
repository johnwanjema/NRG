<template>
    <div style="background-color: white; height:685px">
        <div class="container-fluid" style="padding:30px">
            <div style=" color: white" class="block bg-dark">
                <div style="background-color:#26b99a" class="block-header block-header-default ">
                    <h3 style="color:white" class="block-title ">Apply for position of {{position}} at {{station}}
                    </h3>
                </div>
                <div class="block-content">
                    <form @submit.prevent="addUser()">
                        <div class="row items-push">
                            <div class="col-lg-3">
                                <div class="push">
                                    <img height="250px" id="target" src="/assets/media/avatars/avatar15.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 offset-lg-1">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label>Full Name</label>
                                        <input type="text" id="profile-settings-username" name="profile-settings-username" placeholder="Enter your username.."  class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label>Phone Number </label>
                                        <input type="text" name="profile-settings-email" placeholder="Enter your phone Number.."  class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label>Email Address</label>
                                        <input type="email" name="profile-settings-email" placeholder="Enter your email.."  class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-10 col-xl-6">
                                        <label class="col-12">Upload Profile Picture</label>
                                        <div class="custom-file">
                                            <input id="select_image" type="file" @change="putImage()">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="example-file-input">Upload File/Video</label>
                                    <div class="col-12">
                                        <input type="file" id="example-file-input" name="example-file-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <!-- <button style="color:white" type="submit" class="btn btn-danger  btn-block btn-lg">SUBMIT</button> -->
                                        <button style="background-color: #26b99a; color: white;" type="submit" class="btn  btn-alt-primary btn-lg">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["station", 'position'],
    methods: {
        addUser() {
            router.push({
                name: "dashboard",
                // params: {darasa :darasa}
            })
        },
        putImage() {
            var src = document.getElementById("select_image");
            var target = document.getElementById("target");
            this.showImage(src, target);
        },
        showImage(src, target) {
            var fr = new FileReader();

            fr.onload = function() {
                target.src = fr.result;
            }
            fr.readAsDataURL(src.files[0]);

        }
    }
};
</script>