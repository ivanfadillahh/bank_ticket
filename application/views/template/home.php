<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <h4 class="header-title m-t-0 m-b-20 text-center">Welcome to Bankrut! <small class="text-muted" id='ct'><body onload="display_ct()"></small> </h4>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box widget-inline">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="widget-inline-box text-center">
                                    <h1 class="m-t-10"><b id="cs1"></b></h1>
                                    <h6 class="text-muted"><b>Customer Service</b></h6>
                                </div>
                                <div class="widget-inline-box text-center">
                                    <h1 class="m-t-10"><b id="teller1"></b></h1>
                                    <h6 class="text-muted"><b>Teller 1</b></h6>
                                    <input type="hidden" id="numberCurrentTeller1" name="numberCurrentTeller1">
                                </div>
                                <div class="widget-inline-box text-center">
                                    <h1 class="m-t-10"><b id="teller2"></b></h1>
                                    <h6 class="text-muted"><b>Teller 2</b></h6>
                                    <input type="hidden" id="numberCurrentTeller2" name="numberCurrentTeller2">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="widget-inline-box text-center" style="padding-top: 39px;">
                                    <h4 class="m-t-10"><b>Nomor Antrian</b></h4>
                                    <p class="m-t-10" style="font-size:80pt;color:red;"><b id="antrian"></b></p>
                                    <h6 class="m-t-10"><b>Silahkan menuju</b></h6>
                                    <h4 class="m-t-10" style="color:red"><b id="tujuan"></b></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-box box1" id="aa" onclick="ambil_antrian_cs()" style="cursor:pointer">
                                        <div class="widget-inline-box text-center">
                                            <h6 class="m-t-10"><b>Ambil Antrian Baru Customer Service</b></h6>
                                            <h3><b id="cs"></b></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card-box box1" id="aa" onclick="ambil_antrian_teller()" style="cursor:pointer;">
                                        <div class="widget-inline-box text-center">
                                            <h6 class="m-t-10"><b>Ambil Antrian Baru Teller</b></h6>
                                            <h3><b id="teller"></b></h3>
                                            <h3><b id="tellerr"></b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12" id="allowedCs1">
                                    <div class="card-box box1" onclick="next_cs(1)" style="cursor:pointer">
                                        <div class="widget-inline-box text-center">
                                            <input type="hidden" id="idCurrentCs" name="idCurrentCs">
                                            <h6 class="m-t-10"><b>Customer Service Next Queue </b><i class="mdi mdi-skip-next mdi-36px" style="display: inline-flex; vertical-align: middle;"></i></h6>
                                            <h3><b id="cs"></b></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12" id="notAllowedCs1" style="cursor:not-allowed;">
                                    <div class="card-box">
                                        <div class="widget-inline-box text-center">
                                            <input type="hidden" id="idCurrentCs" name="idCurrentCs">
                                            <h6 class="m-t-10"><b>Customer Service Next Queue </b><i class="mdi mdi-skip-next mdi-36px" style="display: inline-flex; vertical-align: middle;"></i></h6>
                                            <h3><b id="cs"></b></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12" id="allowedTeller1" style="cursor:pointer;">
                                    <div class="card-box box1" onclick="next_teller(1)">
                                        <div class="widget-inline-box text-center">
                                            <input type="hidden" id="idCurrentTeller1" name="idCurrentTeller1">
                                            <h6 class="m-t-10"><b>Teller 1 Next Queue</b><i class="mdi mdi-skip-next mdi-36px" style="display: inline-flex; vertical-align: middle;"></i></h6>
                                            <h3><b id="teller"></b></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12" id="notAllowedTeller1" style="cursor:not-allowed;">
                                    <div class="card-box">
                                        <div class="widget-inline-box text-center">
                                            <input type="hidden" id="idCurrentTeller1" name="idCurrentTeller1">
                                            <h6 class="m-t-10"><b>Teller 1 Next Queue</b><i class="mdi mdi-skip-next mdi-36px" style="display: inline-flex; vertical-align: middle;"></i></h6>
                                            <h3><b id="teller"></b></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12" id="allowedTeller2" style="cursor:pointer;">
                                    <div class="card-box box1" onclick="next_teller(2)">
                                        <div class="widget-inline-box text-center">
                                            <input type="hidden" id="idCurrentTeller2" name="idCurrentTeller2">
                                            <h6 class="m-t-10"><b>Teller 2 Next Queue</b><i class="mdi mdi-skip-next mdi-36px" style="display: inline-flex; vertical-align: middle;"></i></h6>
                                            <h3><b id="teller"></b></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12" id="notAllowedTeller2" style="cursor:not-allowed;">
                                    <div class="card-box">
                                        <div class="widget-inline-box text-center">
                                            <input type="hidden" id="idCurrentTeller1" name="idCurrentTeller1">
                                            <h6 class="m-t-10"><b>Teller 2 Next Queue</b><i class="mdi mdi-skip-next mdi-36px" style="display: inline-flex; vertical-align: middle;"></i></h6>
                                            <h3><b id="teller"></b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <audio id="audio">
            <source src="<?php echo base_url();?>assets/Airport_Bell.mp3" type="audio/mpeg">
        </audio>

        <audio id="ant_a">
            <source src="<?php echo base_url();?>assets/audio/a.wav" type="audio/mpeg">
        </audio>

        <audio id="ant_b">
            <source src="<?php echo base_url();?>assets/audio/b.wav" type="audio/mpeg">
        </audio>

        <audio id="cs_call">
            <source src="<?php echo base_url();?>assets/audio/antrian.wav" type="audio/mpeg">
        </audio>

        <audio id="no_antrian1">
            <source src="<?php echo base_url();?>assets/audio/1.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian2">
            <source src="<?php echo base_url();?>assets/audio/2.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian3">
            <source src="<?php echo base_url();?>assets/audio/3.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian4">
            <source src="<?php echo base_url();?>assets/audio/4.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian5">
            <source src="<?php echo base_url();?>assets/audio/5.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian6">
            <source src="<?php echo base_url();?>assets/audio/6.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian7">
            <source src="<?php echo base_url();?>assets/audio/7.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian8">
            <source src="<?php echo base_url();?>assets/audio/8.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian9">
            <source src="<?php echo base_url();?>assets/audio/9.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian10">
            <source src="<?php echo base_url();?>assets/audio/10.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian11">
            <source src="<?php echo base_url();?>assets/audio/11.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian12">
            <source src="<?php echo base_url();?>assets/audio/12.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian13">
            <source src="<?php echo base_url();?>assets/audio/13.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian14">
            <source src="<?php echo base_url();?>assets/audio/14.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian15">
            <source src="<?php echo base_url();?>assets/audio/15.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian16">
            <source src="<?php echo base_url();?>assets/audio/16.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian17">
            <source src="<?php echo base_url();?>assets/audio/17.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian18">
            <source src="<?php echo base_url();?>assets/audio/18.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian19">
            <source src="<?php echo base_url();?>assets/audio/19.wav" type="audio/mpeg">
        </audio>
        <audio id="no_antrian20">
            <source src="<?php echo base_url();?>assets/audio/20.wav" type="audio/mpeg">
        </audio>

    </div> <!-- container -->


    <div class="footer">
        <div>
            <strong>Bankrut</strong> - Copyright © <?php echo date('Y')?>
        </div>
    </div>

</div>

<style>
.box1:hover {
    background-color:red;
    color:#fff !important;
    
}
</style>

<script>

$(document).ready(function(){
    $("#notAllowedCs1").hide();
    $("#allowedCs1").show();
    $("#notAllowedTeller1").hide();
    $("#allowedTeller1").show();
    $("#notAllowedTeller2").hide();
    $("#allowedTeller2").show();
});

function get_last_cs()
{
    var settings = {
        "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            query: "query{csQueues(limit:1,orderBy:number_DESC){number,tanggal}}",
            variables: {}
        })
    };

    $.ajax(settings).done(function (response) {
        var data = response.data.csQueues[0];
        if(data == undefined) {
            document.getElementById("cs").innerHTML = "A - 1";
            $('#cs').val(0);
        } else {
            var a = data.number;
            document.getElementById("cs").innerHTML = "A - " + (a + 1);
            $('#cs').val(a);
        }
    });
}

function get_last_teller()
{
    var settings = {
        "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            query: "query{tellerQueues(limit:1,orderBy:number_DESC){number,tanggal}}",
            variables: {}
        })
    };

    $.ajax(settings).done(function (response) {
        var data = response.data.tellerQueues[0];
        if(data == undefined) {
            document.getElementById("teller").innerHTML = "B - 1";
            $('#teller').val(0);
        } else {
            var a = data.number;
            document.getElementById("teller").innerHTML = "B - " + (a + 1);
            $('#teller').val(a);
        }
    });
}

function get_current_cs(cs)
{
    var cs_number = cs;

    var settings = {
        "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            query: "query{csQueues(where:{cus:1, status:false},limit:1,orderBy:number_ASC){id,number,status}}",
            variables: {}
        })
    };

    $.ajax(settings).done(function (response) {
        var data = response.data.csQueues[0];
        if(data == undefined) {
            var settings = {
                "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    query: "query{csQueues(where:{cus:1},limit:1,orderBy:number_DESC){id,number,status,cus,tanggal}}",
                    variables: {}
                })
            };

            $.ajax(settings).done(function (response) {
                document.getElementById("cs"+cs_number).innerHTML = "A - 0";
                $("#cs"+cs).val(0);
                check_button_cs();
            });
        } else {
            $('#idCurrentCs').val(data.id);
            document.getElementById("cs"+cs_number).innerHTML = "A - " + (data.number);
            $("#cs"+cs).val(data.number);
            check_button_cs();
        }
    });
    
}

function get_current_teller(teller)
{
    var teller_number = teller;

    var settings = {
        "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            query: "query{tellerQueues(where:{teller:"+teller+", status:false},limit:1,orderBy:number_ASC){id,number,status}}",
            variables: {}
        })
    };

    $.ajax(settings).done(function (response) {
        var data = response.data.tellerQueues[0];
        if(data == undefined) {
            var settings = {
                "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    query: "query{tellerQueues(where:{teller:"+teller+"},limit:1,orderBy:number_DESC){id,number,status,teller,tanggal}}",
                    variables: {}
                })
            };

            $.ajax(settings).done(function (response) {
                document.getElementById("teller"+teller_number).innerHTML = "B - 0";
                $("#teller"+teller_number).val(0);
                check_antrian();
                check_button_teller();
            });
        } else {
            $('#idCurrentTeller'+teller).val(data.id);
            $("#teller"+teller_number).val(data.number);
            document.getElementById("teller"+teller_number).innerHTML = "B - " + (data.number);
            check_antrian();
            check_button_teller();
        }
    });
            
    
}

function cur_teller() {
    get_last_cs();
    get_last_teller();
    get_current_cs(1);
    for (let i = 1; i < 3; i++) {
        get_current_teller(i);
    }
}

function check_antrian() {
    var cs_1 = $("#cs1").val();
    var teller_1 = $("#teller1").val();
    var teller_2 = $("#teller2").val();
    if(cs_1 != "" || teller_1 != "" || teller_2 != "") {
        if(teller_2 != 0) {
            if(teller_1 > teller_2) {
                document.getElementById("antrian").innerHTML = "B - " + teller_1;
                document.getElementById("tujuan").innerHTML = "Teller 1";
            } else {
                document.getElementById("antrian").innerHTML = "B - " + teller_2;
                document.getElementById("tujuan").innerHTML = "Teller 2";
            }
        }else if(teller_1 == 0 && teller_2 == 0 && cs_1 !=0) {
            document.getElementById("antrian").innerHTML = "A - " + cs_1;
            document.getElementById("tujuan").innerHTML = "Customer Service";
        } else if(teller_1 !=0 && teller_2 == 0) {
            document.getElementById("antrian").innerHTML = "B - " + teller_1;
            document.getElementById("tujuan").innerHTML = "Teller 1";
        } else {
            document.getElementById("antrian").innerHTML = "0";
            document.getElementById("tujuan").innerHTML = "";
        }
    }
}

function check_button_teller() {
    var teller = $('#teller').val();
    var teller1 = $("#teller1").val();
    var teller2 = $("#teller2").val();
    if(teller == teller1 || teller == teller2) {
        $("#notAllowedTeller1").show();
        $("#allowedTeller1").hide();
        $("#notAllowedTeller2").show();
        $("#allowedTeller2").hide();
    } else {
        $("#notAllowedTeller1").hide();
        $("#allowedTeller1").show();
        $("#notAllowedTeller2").hide();
        $("#allowedTeller2").show();
    }
}

function check_button_cs() {
    var cs = $('#cs').val();
    var cs1 = $("#cs1").val();
    if(cs == cs1) {
        $("#notAllowedCs1").show();
        $("#allowedCs1").hide();
        $("#notAllowedCs2").show();
        $("#allowedCs2").hide();
    } else {
        $("#notAllowedCs1").hide();
        $("#allowedCs1").show();
        $("#notAllowedCs2").hide();
        $("#allowedCs2").show();
    }
}

cur_teller();

function ambil_antrian_cs() {
    var d = new Date(Date.now());
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    var date = year+"-"+month+"-"+day;
    var settings = {
        "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            query: "query{csQueues(limit:1,orderBy:number_DESC){number,tanggal}}",
            variables: {}
        })
    };

    $.ajax(settings).done(function (response) {
        var data = response.data.csQueues[0]; 
        if(data == undefined) {
            var settings = {
                "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    query: "mutation{createCsQueue(input:{number:1,cus:0,tanggal:\""+date+"\"}){id,number,tanggal,cus,status}}",
                    variables: {}
                })
            };

            $.ajax(settings).done(function (response) {
                refresh_data();
                cur_teller();
            });
        } else {
            var settings = {
                "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    query: "mutation{createCsQueue(input:{number:"+(data.number+1)+",cus:0,tanggal:\""+date+"\"}){id,number,tanggal,cus,status}}",
                    variables: {}
                })
            };

            $.ajax(settings).done(function (response) {
                refresh_data();
                cur_teller();
            });
        }
    });
}

function ambil_antrian_teller() {
    var d = new Date(Date.now());
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    var date = year+"-"+month+"-"+day;
    var settings = {
        "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            query: "query{tellerQueues(limit:1,orderBy:number_DESC){number,tanggal}}",
            variables: {}
        })
    };

    $.ajax(settings).done(function (response) {
        var data = response.data.tellerQueues[0]; 
        if(data == undefined) {
            var settings = {
                "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    query: "mutation{createTellerQueue(input:{number:1,teller:0,tanggal:\""+date+"\"}){id,number,tanggal,teller,status}}",
                    variables: {}
                })
            };

            $.ajax(settings).done(function (response) {
                refresh_data();
                cur_teller();
            });
        } else {
            var settings = {
                "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    query: "mutation{createTellerQueue(input:{number:"+(data.number+1)+",teller:0,tanggal:\""+date+"\"}){id,number,tanggal,teller,status}}",
                    variables: {}
                })
            };

            $.ajax(settings).done(function (response) {
                refresh_data();
                cur_teller();
            });
        }
    });
}

function next_cs(cs) {
    var id = $('#idCurrentCs').val();
    var cs = cs;

    var settings = {
        "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            query: "mutation {updateCsQueue (id: \""+id+"\", input: {status: true,}) {id,status}}",
            variables: {}
        })
    };

    $.ajax(settings).done(function (response) {
        var data = response.data.updateCsQueue;
        var settings = {
            "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                query: "query{csQueues(where:{cus:0},limit:1,orderBy:number_ASC){id,number,status,cus}}",
                variables: {}
            })
        };

        $.ajax(settings).done(function (response) {
            var data = response.data.csQueues[0];
            var settings = {
                "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    query: "mutation {updateCsQueue (id: \""+data.id+"\", input: {cus:"+cs+"}) {id,status,cus,number}}",
                    variables: {}
                })
            };

            $.ajax(settings).done(function (response) {
                var result = response.data.updateCsQueue;
                document.getElementById("antrian").innerHTML = "A - "+ (result.number);
                document.getElementById("tujuan").innerHTML = "Customer Service";
                get_current_cs(1);
                var   = document.getElementById("audio");
                var ant_a = document.getElementById("ant_a");
                var cs_call = document.getElementById("cs_call");
                if(result.number == 1){
                    var no_antrian = document.getElementById("no_antrian1");
                }
                else if(result.number == 2){
                    var no_antrian = document.getElementById("no_antrian2");
                }
                else if(result.number == 3){
                    var no_antrian = document.getElementById("no_antrian3");
                }
                else if(result.number == 4){
                    var no_antrian = document.getElementById("no_antrian4");
                }
                else if(result.number == 5){
                    var no_antrian = document.getElementById("no_antrian5");
                }
                else if(result.number == 6){
                    var no_antrian = document.getElementById("no_antrian6");
                }
                else if(result.number == 7){
                    var no_antrian = document.getElementById("no_antrian7");
                }
                else if(result.number == 8){
                    var no_antrian = document.getElementById("no_antrian8");
                }
                else if(result.number == 9){
                    var no_antrian = document.getElementById("no_antrian9");
                }
                else if(result.number == 10){
                    var no_antrian = document.getElementById("no_antrian10");
                }
                else if(result.number == 11){
                    var no_antrian = document.getElementById("no_antrian11");
                }
                else if(result.number == 12){
                    var no_antrian = document.getElementById("no_antrian12");
                }
                else if(result.number == 13){
                    var no_antrian = document.getElementById("no_antrian13");
                }
                else if(result.number == 14){
                    var no_antrian = document.getElementById("no_antrian14");
                }
                else if(result.number == 15){
                    var no_antrian = document.getElementById("no_antrian15");
                }
                else if(result.number == 16){
                    var no_antrian = document.getElementById("no_antrian16");
                }
                else if(result.number == 17){
                    var no_antrian = document.getElementById("no_antrian17");
                }
                else if(result.number == 18){
                    var no_antrian = document.getElementById("no_antrian18");
                }
                else if(result.number == 19){
                    var no_antrian = document.getElementById("no_antrian19");
                }
                else if(result.number == 20){
                    var no_antrian = document.getElementById("no_antrian20");
                }
                audio.play();
                setTimeout(function(){
                    cs_call.play();
                },3500);
                setTimeout(function(){
                    ant_a.play();
                },4600);
                setTimeout(function(){
                    no_antrian.play();
                },5000);
            });
        });
    });
}

function next_teller(teller) {
    var id = $('#idCurrentTeller'+teller).val();
    var teller = teller;

    var settings = {
        "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            query: "mutation {updateTellerQueue (id: \""+id+"\", input: {status: true,}) {id,status}}",
            variables: {}
        })
    };

    $.ajax(settings).done(function (response) {
        var data = response.data.updateTellerQueue;
        var settings = {
            "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                query: "query{tellerQueues(where:{teller:0},limit:1,orderBy:number_ASC){id,number,status,teller}}",
                variables: {}
            })
        };

        $.ajax(settings).done(function (response) {
            var data = response.data.tellerQueues[0];
            var settings = {
                "url": "https://dev-antrian1598585315002.sigma.microgen.id/graphql",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    query: "mutation {updateTellerQueue (id: \""+data.id+"\", input: {teller:"+teller+"}) {id,status,teller,number}}",
                    variables: {}
                })
            };

            $.ajax(settings).done(function (response) {
                var result = response.data.updateTellerQueue;
                document.getElementById("antrian").innerHTML = "B - "+ (result.number);
                document.getElementById("tujuan").innerHTML = "Teller "+teller;
                get_current_teller(teller);
                var audio = document.getElementById("audio");
                var ant_b = document.getElementById("ant_b");
                var cs_call = document.getElementById("cs_call");
                if(result.number == 1){
                    var no_antrian = document.getElementById("no_antrian1");
                }
                else if(result.number == 2){
                    var no_antrian = document.getElementById("no_antrian2");
                }
                else if(result.number == 3){
                    var no_antrian = document.getElementById("no_antrian3");
                }
                else if(result.number == 4){
                    var no_antrian = document.getElementById("no_antrian4");
                }
                else if(result.number == 5){
                    var no_antrian = document.getElementById("no_antrian5");
                }
                else if(result.number == 6){
                    var no_antrian = document.getElementById("no_antrian6");
                }
                else if(result.number == 7){
                    var no_antrian = document.getElementById("no_antrian7");
                }
                else if(result.number == 8){
                    var no_antrian = document.getElementById("no_antrian8");
                }
                else if(result.number == 9){
                    var no_antrian = document.getElementById("no_antrian9");
                }
                else if(result.number == 10){
                    var no_antrian = document.getElementById("no_antrian10");
                }
                else if(result.number == 11){
                    var no_antrian = document.getElementById("no_antrian11");
                }
                else if(result.number == 12){
                    var no_antrian = document.getElementById("no_antrian12");
                }
                else if(result.number == 13){
                    var no_antrian = document.getElementById("no_antrian13");
                }
                else if(result.number == 14){
                    var no_antrian = document.getElementById("no_antrian14");
                }
                else if(result.number == 15){
                    var no_antrian = document.getElementById("no_antrian15");
                }
                else if(result.number == 16){
                    var no_antrian = document.getElementById("no_antrian16");
                }
                else if(result.number == 17){
                    var no_antrian = document.getElementById("no_antrian17");
                }
                else if(result.number == 18){
                    var no_antrian = document.getElementById("no_antrian18");
                }
                else if(result.number == 19){
                    var no_antrian = document.getElementById("no_antrian19");
                }
                else if(result.number == 20){
                    var no_antrian = document.getElementById("no_antrian20");
                }
                audio.play();
                setTimeout(function(){
                    cs_call.play();
                },3500);
                setTimeout(function(){
                    ant_b.play();
                },4600);
                setTimeout(function(){
                    no_antrian.play();
                },5000);
            });
        });
    });
}

function refresh_data() {
    get_last_cs();
    get_last_teller();
    get_current_cs(1);
}

</script>