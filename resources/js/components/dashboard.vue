<template>
    <div style="background-color:white;height:685px; " class="content">
        <div style="padding:20px">
    
            <div  class="row js-appear-enabled animated fadeIn" data-toggle="appear">
                <!-- Row #1 -->
                <div class="col-6 col-xl-4">
                    <a class="block  text-right bg-danger" href="javascript:void(0)">
                        <div class="block-content block-content-full  border-3x">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-bar-chart fa-3x text-white"></i>
                            </div>
                            <div class="font-size-h3 font-w600 text-white js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="8900">8900</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white">Total Submissions</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-4">
                    <a class="block  text-right bg-earth" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-music-tone-alt fa-3x text-white"></i>
                            </div>
                            <div class="font-size-h3 font-w600 text-white"><span data-toggle="countTo" data-speed="1000" data-to="2600" class="js-count-to-enabled">2600</span></div>
                            <div class="font-size-sm font-w600 text-uppercase text-white">Nrg Submisions</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-4">
                    <a class="block block-link-pop text-right bg-elegance" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-playlist fa-3x text-white"></i>
                            </div>
                            <div class="font-size-h3 font-w600 text-white"><span data-toggle="countTo" data-speed="1000" data-to="2600" class="js-count-to-enabled">2600</span></div>
                            <div class="font-size-sm font-w600 text-uppercase text-white">Fun x Submisions</div>
                        </div>
                    </a>
                </div>
                <!-- END Row #1 -->
            </div>
            <div class="row gutters-tiny js-appear-enabled animated fadeIn">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"><small></small>Submissions</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="DataTables_Table_1_length">
                                            <label>
                                                                Show
                                                                <select v-model="perPage" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="custom-select custom-select-sm form-control form-control-sm">
                                                                    <option value="5">5</option>
                                                                    <option value="8">8</option>
                                                                    <option value="15">15</option>
                                                                    <option value="20">20</option>
                                                                </select>
                                                                entries
                                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                            <label>Search:<input v-model="filter" type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_1" /></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <b-table responsive striped hover show-empty :items="users" :fields="fields" :per-page="0" :current-page="currentPage" :filter="filter" :filterIncludedFields="filterOn" @filtered="onFiltered">
                                            <template v-slot:cell(#)="row">
                                                <p>{{row.index + 1}}</p>
                                    </template>

                                    <template v-slot:cell(category)="row">
                                        <span class="badge badge-primary">{{row.item.category}}</span>
                                    </template>

                                    <template v-slot:cell(avatar)="row">
                                        <img class="img-avatar" src="/assets/media/avatars/avatar15.jpg" alt="">
                                    </template>

                                    <template v-slot:cell(actions)="row">
                                        <b-button class="btn btn-sm" variant="primary" @click="openEditModal(row.item)">
                                            View Submission
                                        </b-button>
                                    </template>
                                </b-table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <!-- <div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 8 of 20 entries</div> -->
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">
                                    <b-pagination v-model="currentPage" :total-rows="totalRows" :per-page="perPage" aria-controls="my-table"></b-pagination>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
        </div>
    </div>
</template>


<script>
export default {
    data() {
        return {
            // Note `isActive` is left out and will not appear in the rendered table
            fields: ['first_name', 'last_name', 'age'],
            currentPage: 1,
            perPage: 15,
            fields: ['#', 'avatar', 'name', 'phoneNumber', 'email', 'category', 'submited_at', 'actions'],
            filter: null,
            filterOn: [],
            totalRows: 1,
            users: [{
                'avatar': 'qwerty',
                'name': 'John Doe',
                'phoneNumber': '07********',
                'email': 'johndoe@gmail.com',
                'category': 'Radio Presenter',
                'submited_at': '5/3/2020'

            }, ],
        }
    },
    watch: {
        currentPage: {
            handler: function(value) {
                this.getTenants(value)
            }
        }
    },
    methods: {
        onFiltered(filteredItems) {
            this.totalRows = filteredItems.length;
            this.currentPage = 1
        },
    }
}
</script>