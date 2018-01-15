@extends('admin.index')
@section('title','添加公告')
@section('zhuti')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-magic"></i>添加公告</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div class="wizard-nav wizard-nav-horizontal">
                        <ul>
                        	<li data-wzd-id="wzd_1c3k5ns514ltm5l1n81_0" class="current">
                       <span>
                       <i class=""></i></span></li>
                       <li data-wzd-id="wzd_1c3k5ns514ltm5l1n81_1">
                       <span><i class=""></i> </span></li>
                       <li data-wzd-id="wzd_1c3k5ns514ltm5l1n81_2"><span>
                       <i class=""></i></span></li></ul>
                       <button type="button" class="btn responsive-prev-btn" disabled="disabled">
                       <i class=""></i></button><button type="button" class="btn responsive-next-btn"><i class=""></i></button></div><form class="mws-form wzd-validate wizard-form wizard-form-horizontal" novalidate="novalidate">
                            
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1c3k5ns514ltm5l1n81_0" style="display: block;">
                                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                                <div id="" class="mws-form-row">
                                    <label class="mws-form-label">标题</label>
                                    <div class="mws-form-item">
                                        <input type="text" name="fullname" class="required large">
                                    </div>
                                </div>

                               
                                <div class="mws-form-row">
                                    <label class="mws-form-label">内容</label>
                                    <div class="mws-form-item">
                                        <textarea name="address" rows="" cols="" class="required large"></textarea>
                                    </div>
                                </div>
                                
                            </fieldset>
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1c3k5ns514ltm5l1n81_1" style="display: none;">
                                <legend class="wizard-label" style="display: none;"><i class="icol-delivery"></i> Membership Type</legend>
                                <div id="" class="mws-form-row">
                                    <label class="mws-form-label">Membership Plan <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <select class="required large">
                                            <option>Free</option>
                                            <option>Standard</option>
                                            <option>Premium</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Subscription Period <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <select class="required large">
                                            <option>One Month</option>
                                            <option>Six Months</option>
                                            <option>Twelve Months</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Payment Method <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list">
                                            <li><input type="radio" id="cc" name="pm" class="required"> <label for="cc">Credit Card</label></li>
                                            <li><input type="radio" id="pp" name="pm"> <label for="pp">PayPal</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="pm" style="display:none"></label>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1c3k5ns514ltm5l1n81_2" style="display: none;">
                                <legend class="wizard-label" style="display: none;"><i class="icol-user"></i> Confirmation</legend>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Message <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <textarea name="address" rows="" cols="" class="required large"></textarea>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Subscribe Newsletter <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list inline">
                                            <li><input type="radio" id="sn_yes" name="sn" class="required"> <label for="sn_yes">Yes</label></li>
                                            <li><input type="radio" id="sn_no" name="sn"> <label for="sn_no">No</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="sn" style="display:none"></label>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">I agree to the TOS <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list inline">
                                            <li><input type="checkbox" id="tos_y" name="tos" class="required"> <label for="tos_y">Yes</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="tos" style="display:none"></label>
                                    </div>
                                </div>
                            </fieldset>
          				 <div class="mws-button-row">
               				 {{csrf_field()}}
               			 <input type="submit" class="btn btn-default" value="添加">
            </div>
    </div>
@stop
