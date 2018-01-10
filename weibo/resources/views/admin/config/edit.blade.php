@extends('admin.index')
@section('title','网站配置')
@section('zhuti')
	
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-magic"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 配置信息</font></font></span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div class="wizard-nav wizard-nav-horizontal"><ul><li data-wzd-id="wzd_1c3fh3aaugricat1bgu_0" class="current">
                        <span>	<font style="vertical-align: inherit;"></font></span></li>
                        <li data-wzd-id="wzd_1c3fh3aaugricat1bgu_1"><span><font style="vertical-align: inherit;">
                        </font></span></li><li data-wzd-id="wzd_1c3fh3aaugricat1bgu_2">
                        <span><font style="vertical-align: inherit;"></font></span></li></ul>
                        <button type="button" class="btn responsive-prev-btn" disabled="disabled">	</button>
                        <button type="button" class="btn responsive-next-btn"></button></div>
                        <form class="mws-form wzd-default wizard-form wizard-form-horizontal">
                            
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1c3fh3aaugricat1bgu_0" style="display: block;">
                                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                                <div id="" class="mws-form-row">
                                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网站名称</font></font><span class="required"></span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="fullname" class="required large">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网站标题</font></font><span class="required"></span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="email" class="required email large">
                                    </div>
                                </div>

								  <div class="mws-form-row">
                                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网站版权</font></font><span class="required"></span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="email" class="required email large">
                                    </div>
                                </div>
										
								<div class="mws-form-row">
    									<label class="mws-form-label">网站logo</label>
    									<div class="mws-form-item">
    									<input type="file" readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="文件上传" name='profile'>
    								</div>
    							</div>



                                <div class="mws-form-row">
                                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网站关键字</font></font><span class="required"></span></label>
                                    <div class="mws-form-item">
                                        <textarea name="address" rows="" cols="" class="required large"></textarea>
                                    </div>
                                </div>

                                <div class="mws-form-row">
    								<label class="mws-form-label">状态</label>
    								<div class="mws-form-item clearfix">
    								<ul class="mws-form-list inline">
    								<li><input type="radio" name='status' value='1' checked> <label>开启</label></li>
    								<li><input type="radio" name='status' value='0'> <label>禁止</label></li>
    						
    					</ul>
    				</div>
    			</div>
                              
                            </fieldset>
                            
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1c3fh3aaugricat1bgu_1" style="display: none;">
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
                            
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1c3fh3aaugricat1bgu_2" style="display: none;">
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
    			
    			<input type="submit" class="btn btn-danger" value="提交">
    			
    			
    		</div>
                </div>

@stop