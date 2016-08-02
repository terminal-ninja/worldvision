<?php /* Template Name: Sponsor Template */ get_header(); ?>

  <h2 class="heading">Sponsor a Child</h2>
  <!-- <iframe src="http://154.0.174.147:8088/wvusertest/" width="100%" height="980" frameborder="0"> </iframe> -->
  <section>
   <style>
        .page-heading {
            border-top: 0;
            padding: 0px 0px 0px 0px;
        }

        .btn-w-m {
            min-width: 115px !important;
        }
        /*.gallaryImage {
            min-width: 200px;
            min-height: 200px;
            overflow: auto;
        }*/
        /*img {
        min-width: 200px;
        min-height: 200px;
    }*/
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <div class="row ">
    <nav class="navbar padding navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        @if (Session["user_id"] != null)
        {
            <div class="navbar-header pull-left"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a></div>
        }
        <div class="col-lg-7 pull-left pro-head ">
            <h2>Choose Child</h2>
            @* <ol class="breadcrumb">

                    <li>
                        <a href="@Url.Action("UserList", "User")">Setup User Profiles </a>

                    </li>

                    <li class="active">
                        <strong>Create User Profile</strong>
                    </li>

                </ol>*@
        </div>
    </nav>
</div> -->
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="">

                <div class="ibox-content">


                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Location</label>
                                <select class="chosen-select form-control  form-control-name" id="gift_category" name="gift_category" >
                                  <option value="">All</option>
                                  <option value="15">Toys</option>
                                  <option value="17">Clothes</option>
                                  <option value="18">Books</option>
                                  <option value="20">Sports And Games</option>
                                </select>


                            </div>

                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="chosen-select form-control  form-control-name" id="gift_category" name="gift_category" >
                                  <option value="">All</option>
                                  <option value="15">Toys</option>
                                  <option value="17">Clothes</option>
                                  <option value="18">Books</option>
                                  <option value="20">Sports And Games</option>
                                </select>

                            </div>

                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Age Range</label>
                               <select class="chosen-select form-control  form-control-name" id="gift_category" name="gift_category" >
                                  <option value="">All</option>
                                  <option value="15">Toys</option>
                                  <option value="17">Clothes</option>
                                  <option value="18">Books</option>
                                  <option value="20">Sports And Games</option>
                                </select>


                            </div>

                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label>Day</label>
                                <select class="chosen-select form-control  form-control-name" id="gift_category" name="gift_category" >
                                  <option value="">All</option>
                                  <option value="15">Toys</option>
                                  <option value="17">Clothes</option>
                                  <option value="18">Books</option>
                                  <option value="20">Sports And Games</option>
                                </select>

                            </div>

                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Month</label>
                                <select class="chosen-select form-control  form-control-name" id="gift_category" name="gift_category" >
                                  <option value="">All</option>
                                  <option value="15">Toys</option>
                                  <option value="17">Clothes</option>
                                  <option value="18">Books</option>
                                  <option value="20">Sports And Games</option>
                                </select>


                            </div>

                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Year</label>
                                <select class="chosen-select form-control  form-control-name" id="gift_category" name="gift_category" >
                                  <option value="">All</option>
                                  <option value="15">Toys</option>
                                  <option value="17">Clothes</option>
                                  <option value="18">Books</option>
                                  <option value="20">Sports And Games</option>
                                </select>




                            </div>

                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">

                                <br />
                                 <button class="btn btn-w-m btn-danger" style="margin-top:3px" type="button"  id="btnCancel">Clear</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row" id="childContainer">
      <div class="col-md-3 col-sm-6 col-xs-12"> 
        <div class="post-container"> 
        <div class="post-option"> 
        <ul class="list-options"> 
        <li><a href="" ><i class=""></i><span>Sponsor</span></a></li> 
        <li><a href=""><i class=""></i><span>View</span></a></li> 

        </ul> 
        </div> 
        <div class="post-image"> 
        <a href="" class="img-group-gallery cboxElement" title="Lorem ipsum dolor sit amet"> 

        <img src="<?php echo get_template_directory_uri(); ?>/img/kid5.jpg" class="img-responsive gallaryImage" alt="childimage" /> 

        </a> 
        </div> 
        <div class="post-meta"> 
        <ul class="list-meta list-inline"> 
        <li><b><a href="#">Maria Misma</a></b> </li> 

        </ul> 
        </div> 
        <div class="post-desc"> 
         Age : <b>  10   </b>, Country : <b>  South Africa    </b> 


        </div> 
        </div> 
</div>
    </div>
</div>
<script>
    function filterChild()
    {
       
        var born_location_ = $("#born_location").val()

        var child_gender_ = $("#child_gender").val()
        //var child_name = $("#child_name").val()
        var age_between_ = $("#age_between").val()
        var born_day_ = $("#born_day").val()
        var born_month_ = $("#born_month").val()
        var born_year_ = $("#born_year").val()


        $.ajax({
            type: "GET",
            data: { born_location: born_location_, child_gender: child_gender_, age_between: age_between_, born_day: born_day_, born_month: born_month_, born_year: born_year_ },
            url: '@Url.Action("filterChild")',
            contentType: "application/json; charset=utf-8",
            dataType: "Json",
            success: function (data) {
                $("#childContainer").show()
                $("#childContainer").empty()


                // alert(data[0]); // this is Json data object
                var resultSet = data;
                var html = "";
                $.each(resultSet, function (key, obj) {




                    $("#childContainer").append('<div class="col-md-3 col-sm-6 col-xs-12">' +
                                '<div class="post-container">' +
                                '<div class="post-option">' +
                                '<ul class="list-options">' +
                                '<li><a href="@Url.Action("ChildDetails", "Child")/' + obj.Child_id + '" ><i class="fa fa-thumbs-o-up"></i><span>Sponsor</span></a></li>' +
                                '<li><a href="@Url.Action("ChildDetails", "Child")/' + obj.Child_id + '"><i class="fa fa-eye"></i><span>View</span></a></li>' +

                                '</ul>' +
                                '</div>' +
                                '<div class="post-image">' +
                                '<a href="@Url.Action("ChildDetails", "Child")/' + obj.Child_id + '" class="img-group-gallery cboxElement" title="Lorem ipsum dolor sit amet">' +

                                '<img src="' + obj.Child_Image_URL + '" class="img-responsive gallaryImage" alt="childimage" />' +

                                '</a>' +
                                '</div>' +
                                '<div class="post-meta">' +
                                '<ul class="list-meta list-inline">' +
                                '<li><b><a href="#">' + obj.childName + '</a></b> </li>' +

                                '</ul>' +
                                '</div>' +
                                '<div class="post-desc">' +
                                ' Age : <b>' + obj.Child_Age + ' </b>, Country : <b>' + obj.Child_Country + '  </b>' +


                                '</div>' +
                                '</div>' +
                    '</div>')




                });

            },
            error: function () {
                alert('No Data');
            }
        });


    }

    $(document).ready(function () {

        var config = {
            '.chosen-select': {},
            '.chosen-select-deselect': { allow_single_deselect: true },
            '.chosen-select-no-single': { disable_search_threshold: 10 },
            '.chosen-select-no-results': { no_results_text: 'Oops, nothing found!' },
            '.chosen-select-width': { width: "95%" }
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
        $("#born_location").val("South Africa")
        $('#born_location').trigger('chosen:updated');


        filterChild();

        $("#btnFilter").click(function () {
            filterChild();
        })

        $("#born_location").change(function () {
            filterChild();
        })
        $("#child_gender").change(function () {
            filterChild();
        })
        $("#age_between").change(function () {
            filterChild();
        })

        $("#born_day").change(function () {
            filterChild();
        })

        $("#born_month").change(function () {
            filterChild();
        })

        $("#born_year").change(function () {
            filterChild();
        })
       



        $("#btnCancel").click(function () {
            $("#born_location").val("South Africa")
            //$('#born_location').trigger('chosen:updated');
            $("#child_gender").val("")
            $("#age_between").val("")
            $("#born_day").val("")
            $("#born_month").val("")
            $("#born_year").val("")

            $('.chosen-select').trigger('chosen:updated');
            filterChild();
        })

         
       
    })
</script>
  <!--   <select name="" id=""></select>
    <select name="" id=""></select>
    <select name="" id=""></select>
    <select name="" id=""></select>
    <select name="" id=""></select>
    <select name="" id=""></select>
    <div class="button">
      <a href="" class="secondary">CLEAR</a>
    </div>
  </section>
  <section class="ourway black">
    <div class="item">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/work.jpg" alt="">
      </figure>
      <div class="name"></div>
      <div class="details"></div>
      <div class="sub-item">
        <div class="button">
          <a href="" class="secondary">Become a Godfather</a>
        </div>
        <div class="button">
          <a href="" class="secondary">View</a>
        </div>
      </div>
    </div>
    <div class="item">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/work.jpg" alt="">
      </figure>
      <div class="name"></div>
      <div class="details"></div>
      <div class="sub-item">
        <div class="button">
          <a href="" class="secondary">Become a Godfather</a>
        </div>
        <div class="button">
          <a href="" class="secondary">View</a>
        </div>
      </div>
    </div>
    <div class="item">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/work.jpg" alt="">
      </figure>
      <div class="name"></div>
      <div class="details"></div>
      <div class="sub-item">
        <div class="button">
          <a href="" class="secondary">Become a Godfather</a>
        </div>
        <div class="button">
          <a href="" class="secondary">View</a>
        </div>
      </div>
    </div> -->
    
  </section>

<?php get_footer(); ?>
