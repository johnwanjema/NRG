<template>
    <div style="background-color: red; height:1000px">
        <div class="container">
            <div class="row">
                <div style="margin: 30px; color: white" class="col-md-12 p-20 bg-dark">
                    <div  class="text-center mb-5 pt-2">
                        <!-- <img src="/images/fuxPoster.png" alt="LOGO" class="img-fluid" /> -->
                        <h5 style="color:white">Apply for position of {{position}} at {{station}}</h5>
                    </div>
                    <form class="form">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="email" placeholder="Full Name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" placeholder="email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="email" placeholder="number" class="form-control" />
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Upload profile picture</label>
                            <div class="col-8">
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input js-custom-file-input-enabled" id="example-file-input-custom" name="example-file-input-custom" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="example-file-input-custom">Choose profile picture</label>
                                </div>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-12">Upload file/video</label>
                            <div class="col-8">
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input js-custom-file-input-enabled" id="example-file-input-custom" name="example-file-input-custom" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="example-file-input-custom">Upload video/file</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <button style="color:white" type="submit" class="btn btn-danger  btn-block btn-lg">SUBMIT</button>
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
    params: ["station",'position'],
};
</script>