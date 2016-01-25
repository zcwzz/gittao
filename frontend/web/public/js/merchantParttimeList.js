/**
 * @兼职列表
 * @CodeBy:js
 * @Date:2015/11/15
 */
var _userInfo = GLOBAL.cookie("CustomerMember") ? eval('(' + GLOBAL.cookie('CustomerMember') + ')') : {};
GLOBAL.pagebase.add({


    loadingPage: function (reg, pageIndex) {
    	GLOBAL.pagebase.headFramePage('list');
        GLOBAL.pagebase.getmerchantParttimeList(reg, pageIndex);
       
    },

    

    /**
	 * @兼职列表
	 */
    getmerchantParttimeList: function (reg, pageIndex) {
        var _tempDeom = $('#parttimedate');
        var pageSize = 10;
        var dataSrouce = function (pageIndex) {
            $('#parttimedate').html("");
            var _userInfo = GLOBAL.pagebase._userInfo;
            var _serviceURL =GLOBAL.pagebase.UrlReg+ '/ParttimeListBackstage';
            var _dataHandle = GLOBAL.dataStore.dataHandle;
            var _dataMode;
            var _parame = {
                'limit': pageSize,
                'page': pageIndex,
                'userId': _userInfo.userId
            };
            _dataHandle.postData({
                url: _serviceURL,
                parame: _parame,
                async: false,
                success: function (data) {
                    _dataMode = data;
                    var _tempDataHtml = _tempDeom;
                    var _tempTemplate = $('#parttimedateTemplate').html();
                    for (var i = 0; i < data.data.length; i++) {
                        var _dataContent = data.data[i];
                        _dataContent.number=i+1;
                      
                        if(_dataContent.status=='1'){
                        	_dataContent.status="报名审核";//修改方法
                        	_dataContent.options="<a href='javascript:void(0)' onclick='GLOBAL.pagebase.parttimeUpdateLink("+_dataContent.jobId+","+_dataContent.status+")'>修改</a>";
                        }
                        if(_dataContent.status=='2'){
                        	_dataContent.status="兼职结算";//结算方法
                        	_dataContent.options="<a href='javascript:void(0)' onclick='GLOBAL.pagebase.parttimeUpdateLink("+_dataContent.jobId+","+_dataContent.status+")'>结算</a>";
                        }
                        else if(_dataContent.status=='null'||'0'){
                        	
                        	_dataContent.status="未审核" ;
                        	_dataContent.options="<a href='javascript:void(0)' onclick='GLOBAL.pagebase.delteJobInfo("+_dataContent.jobId+")'>删除</a> &nbsp; &nbsp;<a href='javascript:void(0)' onclick='GLOBAL.pagebase.parttimeUpdateLink("+_dataContent.jobId+","+_dataContent.status+")'>修改</a>";
                        			
                        }
                        else if(_dataContent.status=='3')
                        	{
                        	_dataContent.status='待评论';//评论方法
                        	_dataContent.options="<a href='javascript:void(0)' onclick='GLOBAL.pagebase.delteJobInfo("+_dataContent.jobId+")' >评论</a>";
                        	
                        	}
                        else if(_dataContent.status=='4'){
                        	_dataContent.status='未通过';
                        	_dataContent.options="<a href='javascript:void(0)' >未通过</a>";
                        }
                        
                       
                        _dataContent.workBegin = GLOBAL.common.covnertDate(_dataContent.workBegin);
                        _dataContent.workEnd = GLOBAL.common.covnertDate(_dataContent.workEnd);
                        _tempDataHtml.append(_tempTemplate.replaceData(_dataContent));
                    }

                }, error: function (data) {
                    alert('温馨提示：' + data + '!');

                }
            });
            return _dataMode;
        };
        var _datas = dataSrouce(pageIndex);
        var num = Math.ceil(_datas.total / _datas.limit);
        $("#kkpager").html("");
        kkpager.generPageHtml({
            pno: pageIndex,
            // 总页码
            total: num,
            // 总数据条数
            totalRecords: _datas.total,
            mode: 'click',
            click: function (n) {

                this.selectPage(n);
                _datas = dataSrouce(n);
            },

        });
    },

    parttimeUpdateLink:function(jobId,status){
    	window.location.href=GLOBAL.pagebase.UrlReg+'/merchantCheck?jid='+jobId+'&sid='+status;
    },
    
    
    /**
     * @点击查看详情
     */
   searchStudentInfo:function(jobId){
	  	$('#qpzz').show();
	GLOBAL.pagebase.getParttimeByID(jobId);
   },

    
    /**
     * @删除兼职
     */
    delteJobInfo:function(jobId){
    	 var _dataHandle = GLOBAL.dataStore.dataHandle;
         var _serviceURL=GLOBAL.pagebase.UrlReg+'/deleteParttime';
         var _parame = {
             'jobId': jobId
         };
         _dataHandle.postData({
             url: _serviceURL,
             parame: _parame,
             success: function (data) {
            	 alert('删除成功!!!');
            	 window.location.href=GLOBAL.pagebase.UrlReg+"/merchant/merchantParttimeList";
             },
           error: function (data) {
             alert('温馨提示：' + data + '!');

         }
         });
    },


   
    getParttimeByID: function (jobId) {
    	  var content = $('#studentInfoContent');
    	  
          var contentTemplate = $('#studenInfoTemplate');
          var _serviceURL = GLOBAL.pagebase.UrlReg + '/parttimeDetails';
          var _dataHandle = GLOBAL.dataStore.dataHandle;
          var _parame = {
              'jobId':jobId
          };
          _dataHandle.postData({
              url: _serviceURL,
              parame: _parame,
              success: function (data) {
                  var _model = data.data[0];
                  _model.workBegin = GLOBAL.common.covnertDate(_model.workBegin);
                  _model.workEnd = GLOBAL.common.covnertDate(_model.workEnd);
                  _model.applyBegin = GLOBAL.common.covnertDate(_model.applyBegin);
                  _model.applyEnd = GLOBAL.common.covnertDate(_model.applyEnd);
               
                  content.html(contentTemplate.html().replaceData(_model));
              },
              error: function (data) {
                  alert('温馨提示：' + data + '!');

              }
          });
    },

    /**
    *@通过审核
    */
    pastAudit: function (jobId, stuUserId, type, applyId) {
        var _dataHandle = GLOBAL.dataStore.dataHandle;
        var _serviceURL = '/parttimeExamine';
        var _parame = {
            'userId': _userInfo.userId,
            'stuUserId': stuUserId,
            'applyId': applyId,
            'jobId': jobId,
            'type': type
        };
        _dataHandle.postData({
            url: _serviceURL,
            parame: _parame,
            async: false,
            success: function (data) {
                alert('操作成功！！！');
                window.location.reload();
              
            },

            error: function (data) {
                alert('温馨提示：' + data + '!');
            }

        });
    }

});
