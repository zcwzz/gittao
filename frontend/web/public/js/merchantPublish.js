/**
*@企业发布兼职
*@CodeBy:js
*@Date:2015-11-15
 */
GLOBAL.pagebase.add({



    imgBtnCickjob: function (reg, btn, type) {
        GLOBAL.pagebase.headFramePage('publish');
        var btnid = btn;
        new AjaxUpload(btnid, {
            action: reg + '/picture_' + type,
            data: {},
            responseType: 'json',
            name: 'file',
            onChange: function (file, extension) {
            },
            onSubmit: function (file, extension) {
                if (!(extension && /^(jpeg|JPEG|jpg|JPG|png|PNG|gif|GIF|WMV|wmv)$/.test(extension))) {
                    alert("您上传的文件格式不对，请重新选择！");
                    return false;
                }
            },
            onComplete: function (file, response) {
                var data = $.parseJSON(response.data);
                $('#' + btnid).attr('src', data.imageUrl);
                if (response.success) {
                    $('#' + btnid).attr('src', data.imageUrl);
                }

            }
        });
    },


    /**
	 * @加载页面
	 */
    loadingPageInfo: function (reg) {

        GLOBAL.pagebase.imgBtnCickjob(reg, 'myselfpic1', 'jztp');
        GLOBAL.pagebase.provinceBind(reg);
        GLOBAL.pagebase.businessBigCategoryBind(reg);
        GLOBAL.pagebase.payUnitInfo();
        GLOBAL.pagebase.isDeductSelect();

        GLOBAL.pagebase.getMap();
        $('#btnPublish').bind('click', function () {
            GLOBAL.pagebase.jobAddbtn(reg);
        });

     
        
    },



    payUnitInfo: function () {
        var _serviceURL = GLOBAL.pagebase.UrlReg + '/returnAllUnit';
        var _dataHandle = GLOBAL.dataStore.dataHandle;
        var _parame = {

        };
        _dataHandle.postData({
            url: _serviceURL,
            parame: _parame,
            async: false,
            success: function (data) {
                var _$model = $('.frm').find("select[name='payUnit']")[0];
                for (var j = 0; j < data.data.length; j++) {
                    var model = data.data[j];
                    if (model.unitName == '面议') {
                        $(_$model).append('<option value="' + model.id + '">' + model.unitName + '</option>');
                    }
                    else {
                        $(_$model).append('<option value="' + model.id + '">元/' + model.unitName + '</option>');
                    }
                }
                $(_$model).change(function () {
                    if ($(this).find("option:selected").text() == '面议') {
                        $('#salary').val("");
                        $('#salary').hide();
                    }
                    else {
                        $('#salary').val("");
                        $('#salary').show();
                    }
                });
            }
        });
    },

    
    workTimeShowEnd:function(){
    			$('#end').css({'left':'50%','top':'847.5px'});
    			$('#end').find('li').bind('click',function(){
    	    		$('#workTimeHourEnd').val($(this).html());
    	    		$('#end').hide();
    	    		$('#workTimeHourEnd').blur();
    	    	});
    			$('#end').show();
    },
    
    workTimeShowBegin:function(){
    	$('#begin').css({'left':'36.2%','top':'847.5px'});
 		$('#begin').find('li').bind('click',function(){
    		$('#workTimeHourBegin').val($(this).html());
    		$('#begin').hide();
    		$('#workTimeHourBegin').blur();
    	});
		$('#begin').show();
    },



    /**
    * @省加载
    * @returns
    */
    provinceBind: function (reg) {
        var _serviceURL = reg + '/FindAddress';
        var _dataHandle = GLOBAL.dataStore.dataHandle;
        var _$ddlprovince = $("#province");
        var _parame = {
            'pid': 0
        };
        _dataHandle.postData({
            url: _serviceURL,
            parame: _parame,
            async: false,
            success: function (data) {
                _$ddlprovince.html('');
                $('#city').html('');
                $('#area').html('');
                var html = '';
                for (var i = 0; i < data.data.length; i++) {
                    if (i == 0) {

                        html += ' <option value="">省</option>' + '<option value="' + data.data[i].addressId + '">' + data.data[i].addressName + '</option>';

                    }
                    else {

                        html += '<option value="' + data.data[i].addressId + '">' + data.data[i].addressName + '</option>';

                    }
                }
                _$ddlprovince.html(html);


                _$ddlprovince.change(function () {
                    $('#oneCity').hide();
                    $('#oneCity').attr('code', '');
                    $('#oneCity').val("");
                    $('#area').show();
                    var map = new BMap.Map("mapAdress");
                	var point = new BMap.Point(116.331398,39.897445);
                	map.centerAndZoom(point,12);
                	// 创建地址解析器实例
                	var myGeo = new BMap.Geocoder();
                	
                    myGeo.getPoint( $(this).find('option selected').text(), function (point) {
                        if (point) {
                            map.centerAndZoom(point, 16);
                            map.addOverlay(new BMap.Marker(point));
                        } else {
                            alert("您选择地址没有解析到结果!");
                        }
                        
                    }, $(this).find('option selected').text());
                    GLOBAL.pagebase.cityBind(reg, $(this).find("option:selected").val());
                });

            },
            error: function (data) {
                alert('温馨提示：' + data + '!');

            }
        });
    },


    /**
	 * @市加载
	 * @returns
	 */
    cityBind: function (reg, pid) {
        var _serviceURL = reg + '/FindAddress';
        var _dataHandle = GLOBAL.dataStore.dataHandle;
        var _$ddlcity = $("#city");
        var _parame = { 'pid': pid };
        _dataHandle.postData({
            url: _serviceURL,
            parame: _parame,
            async: false,
            success: function (data) {
                _$ddlcity.html('');
                $('#area').html('');
                var html = '';
                for (var i = 0; i < data.data.length; i++) {
                    if (i == 0) {
                        html += ' <option value="" selected=selected>请选择</option>' + '<option value="' + data.data[i].addressId + '" >' + data.data[i].addressName + '</option>';
                    }
                    else {

                        html += '<option value="' + data.data[i].addressId + '" >' + data.data[i].addressName + '</option>';

                    }

                }
                _$ddlcity.html(html);

                _$ddlcity.change(function () {
                    GLOBAL.pagebase.areaBind(reg, $(this).find("option:selected").val());
                });
            },
            error: function (data) {
                alert('温馨提示：' + data + '!');

            }
        });
    },

    isDeductSelect: function () {
        $('#isDeduct').change(function () {
            if ($(this).find("option:selected").text() == '无提成') {
                $('#deductTypeName').val("");
                $('#deductTypeNameSpan').hide();

            }
            else {
                $('#deductTypeName').val("");
                $('#deductTypeNameSpan').show();
            }
        });

    },



    getMap: function () {
   
        // 百度地图API功能
        var map = new BMap.Map("mapAdress");
        var point = new BMap.Point(116.331398, 39.897445);
        map.centerAndZoom(point, 12);
        var geoc = new BMap.Geocoder();

        map.addEventListener("click", function (e) {
            var pt = e.point;
            geoc.getLocation(pt, function (rs) {
                var addComp = rs.addressComponents;

                var modelProvince = $($('#province').find('option'));
                var modelCity = $($('#city').find('option'));
                var modelArea = $($('#area').find('option'));
                for (var i = 0; i < modelProvince.length; i++) {
                    var model = modelProvince[i];
                    if ($(model).text() == addComp.province) {
                        $(model).attr('selected', true);
                    }
                }

                for (var i = 0; i < modelCity.length; i++) {
                    var model = modelCity[i];
                    if ($(model).text() == addComp.city) {
                        $(model).attr('selected', true);
                    }
                }
                for (var i = 0; i < modelArea.length; i++) {
                    var model = modelArea[i];
                    if ($(model).text() == addComp.district) {
                        $(model).attr('selected', true);
                    }
                }
                $('#address').val(rs.address);
            });
        });



    },


    loadMap: function (_this) {
        var adress =$(_this).val();
    	var map = new BMap.Map("mapAdress");
    	var point = new BMap.Point(116.331398,39.897445);
    	map.centerAndZoom(point,12);
    	// 创建地址解析器实例
    	var myGeo = new BMap.Geocoder();
    	
        myGeo.getPoint(adress, function (point) {
            if (point) {
                map.centerAndZoom(point, 16);
                map.addOverlay(new BMap.Marker(point));
            } else {
                alert("您选择地址没有解析到结果!");
            }
            
        }, $('#province').find('option selected').text());
    },








    /**
     * @区加载
     * @returns
     */
    areaBind: function (reg, pid, arg) {
        /* ;*/
        var _serviceURL = reg + '/FindAddress';
        var _dataHandle = GLOBAL.dataStore.dataHandle;
        var _$ddlarea = $("#area");
        var _parame = {
            'pid': pid
        };
        _dataHandle.postData({
            url: _serviceURL,
            parame: _parame,
            async: false,
            success: function (data) {
                _$ddlarea.html('');
                var html = '';
                $('#area').show();
                if (data.total == 0) {
                    $('#oneCity').val($('#province option:selected').text());
                    $('#oneCity').attr('code', $('#province option:selected').val());
                    $('#oneCity').show();
                    html += '<option value="' + $('#city option:selected').val() + '  selected=selected>' + $('#city option:selected').text() + '</option>';
                    $('#area').hide();
                }

                for (var i = 0; i < data.data.length; i++) {
                    html += '<option value="' + data.data[i].addressId + '">' + data.data[i].addressName + '</option>';
                }
                _$ddlarea.html(html);
            },
            error: function (data) {
                alert('温馨提示：' + data + '!');

            }
        });
    },



    /**
     * @行业类型大项加载
     * @returns
     */
    businessBigCategoryBind: function (reg) {
        var _serviceURL = reg + '/getParttimeJobType';
        var _dataHandle = GLOBAL.dataStore.dataHandle;
        var _$ddlindustrytype = $("#workType");
        var _parame = {
        };
        _dataHandle.postData({
            url: _serviceURL,
            parame: _parame,
            async: false,
            success: function (data) {
            	console.log(data);
                _$ddlindustrytype.html('');
                var html = '';
                for (var i = 0; i < data.data.length; i++) {
                    if (i == 0) {
                        html += ' <option value="">请选择兼职类型</option>' + '<option atr="'+data.data[i].jobContent+'"  value="' + data.data[i].jobTypeId + '">' + data.data[i].jobType + '</option>';
                    }
                    else {
                        html += '<option atr="'+data.data[i].jobContent+'" value="' + data.data[i].jobTypeId + '">' + data.data[i].jobType + '</option>';
                    }
                }
                _$ddlindustrytype.html(html);
                console.log(	data);
                $('#workType').change(function(){
                	debugger;
                	$('textarea[name="jobDetails"]').html($(this).find('option:selected').attr('atr'));
                })
            },
            error: function (data) {
                alert('温馨提示：' + data + '!');

            }
        });
    },




    /**
     * @发布兼职
     */
    jobAddbtn: function (reg) {
        if ($('.frm').validationEngine()) {
            var _serviceURL = reg + '/publish/parttime';
            var _dataHandle = GLOBAL.dataStore.dataHandle;
            var strjobModel=$('.dis').find('div[class="dis wid100 textcenter height30 shou backgroundact"]');
           var str='';
            for(var j=0; j<strjobModel.length;j++){
            str+=','+$(strjobModel[j]).html();
            if(j==strjobModel.length-1)
            	{
            	str=str.substring(1);
            	}
            }
            var _parame = {
                userId: GLOBAL.pagebase._userInfo.userId,
                name: $('input[name="name"]').val(),
                salary: $('input[name="salary"]').val(),
               settlementType:$('#payStyle option:selected').text(),
                salaryType: $('#payUnit option:selected').val(),
                salaryTypeName: $('#payUnit option:selected').text(),
                
                
                workTimeHourBegin: $('#workTimeHourBegin').val(),
                workTimeHourEnd: $('#workTimeHourEnd').val(),
                isDeduct: $('#isDeduct option:selected').val(),
                height: $('#height option:selected').text(),
                deductTypeName: $('#deductTypeName').val(),
                sex: $('#sex option:selected').text(),
                workInfo: $('#workInfo').val(),

                introPic: $('#myselfpic1').attr('src'),
                workType: $('#workType option:selected').val(),
                workTypeName: $('#workType option:selected').text(),
        
                applyEnd: $('#applyEnd').val(),
                workBegin: $('#workBegin').val(),
                workEnd: $('#workEnd').val(),
                total: $('input[name="total"]').val(),
                provinceId: $('#province option:selected').val(),
                province: $('#province option:selected').text(),
                cityId: $('#city option:selected').val() || $('#oneCity').val(),
                city: $('#city option:selected').text() || $('#oneCity').attr('code'),
                areaId: $('#area option:selected').val() || $('#city option:selected').val(),
                area: $('#area option:selected').text() || $('#city option:selected').text(),
                enterpriseName: GLOBAL.pagebase._userInfo.businessName,
                address: $('input[name="address"]').val(),
                contact: $('input[name="contact"]').val(),
                contactTel: $('input[name="contactTel"]').val(),
                jobDetails: $('textarea[name="jobDetails"]').val(),
                jobMode: str


            };
           
            _dataHandle.postData({
                url: _serviceURL,
                parame: _parame,
                async: false,
                success: function (data) {
                    alert("兼职发布成功，审核通过后才可以在前台显示，工作人员会在3个工作日内完成审核。");
                    window.location.href = reg + '/merchant/merchantParttimeList';
                },
                error: function (data) {
                    alert('温馨提示：' + data + '!');

                }

            });
        }
        else { return false; }



    }

});