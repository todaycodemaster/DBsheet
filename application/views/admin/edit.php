
<link href="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=asset_url()?>/css/pages/wizard/wizard-5.css" rel="stylesheet" type="text/css" />
<?php 
    $user["update_status"] = "2";
    $this->admin->updateData($user);
?>
<style type="text/css">
    
* {
    box-sizing: border-box;
}
.row > .column {
    padding: 0 8px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

.column {
    float: left;
    width: 25%;
}

/* The Modal (background) */
#myModal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
}

/* Modal Content */
#myModal .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
}

/* The Close Button */
#myModal .close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

#myModal .close:hover,
#myModal .close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

#myModal .mySlides {
  display: none;
}

#myModal .cursor {
    cursor: pointer;
}

/* Next & previous buttons */
#myModal .prev,
#myModal .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
#myModal .next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
#myModal .prev:hover,
#myModal .next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
#myModal .numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

#myModal .caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

#myModal .demo {
  opacity: 0.6;
}

#myModal .active,
#myModal .demo:hover {
  opacity: 1;
}

#myModal img.hover-shadow {
  transition: 0.3s;
}

#myModal .hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#customer.active{
    color: #6993ff !important;
}
</style>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <div class="input-icon">
                    </div>
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <?php if(isset($id)){?>
                    <a id="delete" class="btn btn-danger font-weight-bold py-3 px-6 mr-5">??? ???</a>
                <?php } ?>
                <a href="<?=base_url()?>" class="btn btn-transparent-white font-weight-bold py-3 px-6">????????????????????????</a>
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card Body-->
                <div class="card-body p-0">
                    <!--begin::Wizard 5-->
                    <div class="wizard wizard-5 d-flex flex-column flex-lg-row flex-row-fluid" id="kt_wizard">
                        <!--begin::Content-->
                        <div class="wizard-content bg-gray-100 d-flex flex-column flex-row-fluid py-15 px-5 px-lg-10">
                            <!--begin::Form-->
                            <div class="d-flex justify-content-center flex-row-fluid">
                                <form class="pb-5 w-100 w-md-450px w-lg-1000px" novalidate="novalidate" id="kt_form">
                                    <input type="hidden" name="id" id="id" value="<?=isset($id)?$id:''?>">
                                    <!--begin: Wizard Step 1-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-sm-3 mt-2">
                                                    <input type="text" class="form-control" value="<?=isset($customer)?$customer['name']:''?>" name="name" placeholder="??????"/>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <input type="text" class="form-control" value="<?=isset($customer)?$customer['nick_name']:''?>" name="nick_name" placeholder="????????????"/>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <input type="email" class="form-control" value="<?=isset($customer)?$customer['email']:''?>" name="email" inputmode="text" placeholder="?????????????????????"/>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['birthday']:''?>"  name="birthday" placeholder="????????????"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-map-marker"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <select class="form-control" name="sex">
                                                            <option value="1" <?=isset($customer) &&$customer['sex'] ==1?'selected':''?>>???</option>
                                                            <option value="2" <?=isset($customer) &&$customer['sex'] ==2?'selected':''?>>???</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['post_code']:''?>" name="post_code" inputmode="text" placeholder="????????????"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-bookmark-o"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['address']:''?>"  name="address" placeholder="??????"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-map-marker"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"  placeholder="????????????1" value="<?=isset($customer)?$customer['mobile']:''?>" name="mobile" inputmode="text">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-mobile-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone4']:''?>" name="phone4" placeholder="????????????2"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="d-flex flex-grow-1 align-items-center rounded">
                                                        <div class="text-muted">????????????</div>
                                                        <div class="mr-4 flex-shrink-0 text-center ml-10" style="width: 40px;" onclick="setCustomer()">
                                                            <i id="customer"  class="icon-2x  flaticon-star <?=isset($customer)&&($customer["customer"]=="2")?'active':'text-dark-50'?>"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone1']:''?>" name="phone1" placeholder="????????????1"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone2']:''?>" name="phone2" placeholder="????????????2"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="button" name="saveUser" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3">??????????????????
                                           </button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <span class="card-icon">
                                                    <i class="flaticon2-psd text-primary"></i>
                                                </span>
                                                <h3 class="card-label">??????</h3>
                                            </div>
                                            <div class="card-toolbar">
                                               <a class="btn btn-light-primary font-weight-bolder btn-sm" id="new_family">+ ??????</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <!--begin: Datatable-->
                                            <table class="table table-bordered table-hover table-checkable" id="kt_family_table" style="margin-top: 13px !important">
                                            </table>
                                            <!--end: Datatable-->
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <span class="card-icon">
                                                    <i class="flaticon2-psd text-primary"></i>
                                                </span>
                                                <h3 class="card-label">????????????</h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <a href="javascript:showPurchase()" class="btn btn-light-primary font-weight-bolder btn-sm mr-5 btn-purchase">?????????</a>
                                                <a class="btn btn-light-primary font-weight-bolder btn-sm" id="new_product">+ ??????</a>
                                            </div>
                                        </div>
                                        <div class="card-body purchase collapse show">
                                            <!--begin: Datatable-->
                                            <table class="table table-separate table-head-custom table-foot-custom table-checkable" id="kt_product_table" style="margin-top: 13px !important">
                                            </table>
                                            <!--end: Datatable-->
                                        </div>
                                    </div>  
                                    <div style="display:none;" id="detail_div">
                                        
                                    </div>
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <span class="card-icon">
                                                    <i class="flaticon2-psd text-primary"></i>
                                                </span>
                                                <h3 class="card-label">??????</h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <a class="btn btn-light-primary font-weight-bolder btn-sm" id="new_photo">+ ??????</a>
                                            </div>
                                        </div>
                                        <div class="d-flex card-body justify-content-left flex-wrap photo-container">
                                            <?php if (isset($images)){
                                                end($images); 
                                                $key = key($images); 

                                                if($key >12){ 
                                                    $count = $key;
                                                }else{
                                                    $count = 12;
                                                } 
                                            } else{
                                                $count = 12;
                                            } ?>
                                            <?php for ($i = 1; $i <= $key; $i++){ ?>
                                                <div class="image-input image-input-outline m-5" id="kt_image_<?=$i?>" style="background-image: url(<?=asset_url()?>media/users)">
                                                    <div class="image-<?=$i?> image-input-wrapper" onclick="openModal();currentSlide(<?=$i?>)" style="background-image: url(<?=upload_url()?><?=isset($images->$i)?$images->$i:''?>);background-size: contain;"></div>

                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="???????????????????????????">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" id = "profile_avatar_<?=$i?>" name="profile_avatar_<?=$i?>" accept=".heic, .jpg, .jpeg, .tiff"/>
                                                        <input type="hidden" name="profile_avatar_remove"/>
                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="????????????????????????????????????">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" onclick="removeImg(<?=$i?>)" data-action="remove" data-toggle="tooltip" title="???????????????????????????">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <span class="card-icon">
                                                    <i class="flaticon2-psd text-primary"></i>
                                                </span>
                                                <h3 class="card-label">??????</h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <a href="javascript:showExtend()" class="btn btn-light-primary font-weight-bolder btn-sm mr-5  btn-extend">??????</a>
                                            </div>
                                        </div>
                                        <div class="card-body extend collapse">
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-3">??? ???</label>
                                                        <div class="col-sm-9">
                                                            <select style="width: 100%" class="form-control select2" id="kt_select2_hobby" name="extend[hobby]" id="hobby" multiple="multiple">
                                                                <option value=""></option>
                                                                <option value="?????????" <?=isset($customer)&&($customer["hobby"]=="?????????")?'selected':''?>>?????????</option>
                                                                <option value="???" <?=isset($customer)&&($customer["hobby"]=="???")?'selected':''?>>???</option>
                                                                <option value="??????" <?=isset($customer)&&($customer["hobby"]=="??????")?'selected':''?>>?????? </option>
                                                                <option value="??????" <?=isset($customer)&&($customer["hobby"]=="??????")?'selected':''?>>?????? </option>
                                                                <option value="??????????????????" <?=isset($customer)&&($customer["hobby"]=="??????????????????")?'selected':''?>>??????????????????</option>
                                                            </select>
                                                            <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value="" required> -->
                                                            <div class="fv-plugins-message-container"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-4">?????????</label>
                                                        <div class="col-sm-8">
                                                            <select style="width: 100%" class="form-control select2" id="kt_select2_habit" name="extend[habit]" id="habit" multiple="multiple">
                                                                <option value=""></option>
                                                                <option value="??????" <?=isset($customer)&&($customer["habit"]=="??????")?'selected':''?>>??????</option>
                                                                <option value="??????" <?=isset($customer)&&($customer["habit"]=="??????")?'selected':''?>>?????? </option>
                                                                <option value="??????" <?=isset($customer)&&($customer["habit"]=="??????")?'selected':''?>>?????? </option>
                                                                <option value="??????" <?=isset($customer)&&($customer["habit"]=="??????")?'selected':''?>>?????? </option>
                                                                <option value="?????????" <?=isset($customer)&&($customer["habit"]=="?????????")?'selected':''?>>????????? </option>
                                                                <option value="???" <?=isset($customer)&&($customer["habit"]=="???")?'selected':''?>>???</option>
                                                            </select>
                                                            <div class="fv-plugins-message-container"></div>
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-4">??? ???</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" name="extend[age]" id="age">
                                                                <option value=""></option>
                                                                <option value="???20???" <?=isset($customer)&&($customer["age"]=="???20???")?'selected':''?>>???20???</option>
                                                                <option value="30???" <?=isset($customer)&&($customer["age"]=="30???")?'selected':''?>>30??? </option>
                                                                <option value="40???" <?=isset($customer)&&($customer["age"]=="40???")?'selected':''?>>40??? </option>
                                                                <option value="50???" <?=isset($customer)&&($customer["age"]=="50???")?'selected':''?>>50??? </option>
                                                                <option value="60???" <?=isset($customer)&&($customer["age"]=="60???")?'selected':''?>>60??? </option>
                                                                <option value="70??????" <?=isset($customer)&&($customer["age"]=="70??????")?'selected':''?>>70??????</option>
                                                            </select>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-3">??? ???</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="extend[body]" id="body">
                                                                <option value=""></option>
                                                                <option value="???" <?=isset($customer)&&($customer["body"]=="???")?'selected':''?>>???</option>
                                                                <option value="???" <?=isset($customer)&&($customer["body"]=="???")?'selected':''?>>??? </option>
                                                                <option value="???" <?=isset($customer)&&($customer["body"]=="???")?'selected':''?>>??? </option>
                                                                <option value="???????????????" <?=isset($customer)&&($customer["body"]=="???????????????")?'selected':''?>>??????????????? </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-4">????????????</label>
                                                        <div class="col-sm-8">
                                                            <select style="width: 100%" class="form-control select2" id="kt_select2_color" name="extend[color]" id="color" multiple="multiple">
                                                                <option value=""></option>
                                                                <option value="??????" <?=isset($customer)&&($customer["color"]=="??????")?'selected':''?>>??????</option>
                                                                <option value="??????" <?=isset($customer)&&($customer["color"]=="??????")?'selected':''?>>?????? </option>
                                                                <option value="??????" <?=isset($customer)&&($customer["color"]=="??????")?'selected':''?>>?????? </option>
                                                                <option value="????????????" <?=isset($customer)&&($customer["color"]=="????????????")?'selected':''?>>???????????? </option>
                                                                <option value="???" <?=isset($customer)&&($customer["color"]=="???")?'selected':''?>>??? </option>
                                                                <option value="??????" <?=isset($customer)&&($customer["color"]=="??????")?'selected':''?>>??????</option>
                                                            </select>
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-4">??? ???</label>
                                                        <div class="col-sm-8">
                                                            <select style="width: 100%" class="form-control select2" id="kt_select2_etc" name="extend[etc]" id="etc" multiple="multiple">
                                                                <option value=""></option>
                                                                <option value="????????????" <?=isset($customer)&&($customer["etc"]=="????????????")?'selected':''?>>????????????</option>
                                                                <option value="?????????" <?=isset($customer)&&($customer["etc"]=="?????????")?'selected':''?>>????????? </option>
                                                                <option value="?????????" <?=isset($customer)&&($customer["etc"]=="?????????")?'selected':''?>>????????? </option>
                                                                <option value="?????????" <?=isset($customer)&&($customer["etc"]=="?????????")?'selected':''?>>????????? </option>
                                                                <option value="??????????????????" <?=isset($customer)&&($customer["etc"]=="??????????????????")?'selected':''?>>?????????????????? </option>
                                                                <option value="???????????????" <?=isset($customer)&&($customer["etc"]=="???????????????")?'selected':''?>>???????????????</option>
                                                            </select>
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-3">??? ???</label>
                                                        <div class="col-sm-9">
                                                            <select style="width: 100%" class="form-control select2" id="kt_select2_active" name="extend[active]" id="active" multiple="multiple">
                                                                <option value=""></option>
                                                                <option value="????????????" <?=isset($customer)&&($customer["active"]=="????????????")?'selected':''?>>????????????</option>
                                                                <option value="?????????" <?=isset($customer)&&($customer["active"]=="?????????")?'selected':''?>>????????? </option>
                                                                <option value="?????????" <?=isset($customer)&&($customer["active"]=="?????????")?'selected':''?>>????????? </option>
                                                                <option value="??????" <?=isset($customer)&&($customer["active"]=="??????")?'selected':''?>>?????? </option>
                                                                <option value="???" <?=isset($customer)&&($customer["active"]=="???")?'selected':''?>>??? </option>
                                                                <option value="??????" <?=isset($customer)&&($customer["active"]=="??????")?'selected':''?>>??????</option>
                                                            </select>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-4">?????????</label>
                                                        <div class="col-sm-8">
                                                            <textarea rows = "5" class="form-control form-control-solid form-control-lg" name="extend[extra]"  id="extra"><?=isset($customer)?$customer['extra']:''?></textarea> 
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer extend collapse">
                                            <div class="card-toolbar float-right">
                                               <a href="javascript:saveData()"class="btn btn-light-primary font-weight-bolder btn-sm" id="save_detail">??? ???</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--begin: Wizard Actions-->
                                    <div class="justify-content-between pt-3 text-right" style="text-align: right;">
                                        <div>
                                            <button type="button"  id="confirm"  class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" >??? ???
                                           </button>
                                            
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wizard 5-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    <!--begin::Modal-->
</div>
<div class="modal fade" id="kt_family_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">??????/???????????????</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_family_form">
                <input type="hidden" name="family_id" id="family_id">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">??? ???</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="name" id="name" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">????????????</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="nick_name" id="nick_name" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">????????????</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="birthday" id="birthday" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">??? ???</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control" name="sex" id="sex">
                                <option value="1">???</option>
                                <option value="2">???</option>
                            </select>
                            <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value=""> -->
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">??????</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="content" id="content" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">?????????</button>
            <button type="submit" class="btn btn-primary px-15">??????</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--begin::Modal-->
<div class="modal fade" id="kt_product_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">????????????/???????????????</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_product_form">
                <input type="hidden" name="product_id" id="product_id">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">??????</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control" id="user_name" name="user_name">
                                
                            </select>
                            <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value=""> -->
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">?????????</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="date" id="date" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">?????????</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="name" id="name" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">??????</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="user_name" id="user_name" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">????????????(???)</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="price" id="price" type="number" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                   <!--  <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Etc</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="etc" id="etc" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">????????????</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="content" id="content" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">?????????</button>
                    <button type="submit" class="btn btn-primary px-15">??????</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="kt_confirm_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">??? ???</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_confirm_form">
                <input type="hidden" name="decide" id="decide">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">I D</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="admin_id" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Password</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="password" class="form-control form-control-solid form-control-lg" name="password" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">?????????</button>
            <button type="submit" class="btn btn-primary px-15">??????</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="kt_password_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">??????????????????4?????????????????????????????????</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_password_form">
                <input type="hidden" name="show_type">
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-md-12 input-group">
                            <input type="password" class="form-control col-md-9" maxlength="4" placeholder="??????????????????4?????????????????????????????????" name="digit_pwd"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">?????????</button>
                    <button type="submit" class="btn btn-primary px-15">??????</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="myModal" class="img_modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
         <?php if (isset($images)){
            end($images); 
            $key = key($images); 

            if($key >12){ 
                $count = $key;
            }else{
                $count = 12;
            } 
        } else{
            $count = 12;
        } ?>
        <?php for ($i = 1; $i <= $key; $i++){ ?>
            <div class="mySlides">
                <img src="<?=upload_url()?><?=isset($images->$i)?$images->$i:''?>" style="width:100%">
            </div>
        <?php } ?>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="caption-container">
            <p id="caption"></p>
        </div>
    </div>
</div>
    <!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?=asset_url()?>/plugins/global/plugins.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?=asset_url()?>/js/scripts.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?=asset_url()?>/scripts/edit_family.js"></script>
<script src="<?=asset_url()?>/scripts/edit_product.js"></script>
<script src="<?=asset_url()?>/scripts/edit.js"></script>
<script src="<?=asset_url()?>/scripts/image_input.js"></script>
