/**
 * @我的评论 个人模块
 * @CodeBy:js
 * @Date:2015/11/12
 */
var _userInfo = GLOBAL.cookie('CustomerMember') ? eval('('
        + GLOBAL.cookie('CustomerMember') + ')') : {};
GLOBAL.pagebase.add({

    /**
	 * @我的评论信息
	 * @type 0待评价  1已评价
	 * @pageIndex
	 */
    loadCommentInfo: function (reg, pageIndex, type) {
        GLOBAL.pagebase.headFramePage('comment');
        GLOBAL.pagebase.jobCommentInfo(reg, pageIndex, type);

        $('#waitCommentBtn').bind('click', function () {
            $('div[class="pinglun"]').find('span').removeClass('no');
            $(this).addClass('no');
            $('#studentFrm').hide();
            GLOBAL.pagebase.jobCommentInfo(reg, 1, 0);
        });

        $('#yesCommentBtn').bind('click', function () {
            $('div[class="pinglun"]').find('span').removeClass('no');
            $(this).addClass('no');
            $('#studentFrm').hide();
            GLOBAL.pagebase.jobCommentInfo(reg, 1, 1);
        });
    },


    /**
     * @点击评论
     */
  commentBtnClick:function(_this,type){
	   var display = $('#studentFrm').css('display');
       if (display == 'none') {
           var bid = $(this).attr('atr');
           var jobid = $(this).attr('job');
           var keyid = $(this).attr('keyid');
           GLOBAL.pagebase.getFormeComment(GLOBAL.pagebase.UrlReg, bid, jobid, type);
           $(this).parent().after($('#studentFrm'));
           if (type == 0) {
               $('#btnCommoneTosystem').bind('click', function () {
                   GLOBAL.pagebase.btnSubmitSave(reg, jobid, keyid, bid);
               });
           }
           $('#studentFrm').show();
       }
       else {
           $('#studentFrm').hide();

       }
 
  },



    /**
	 * @兼职的评论加载
	 * @busId 兼职id
	 * @type 待评论0 已评论1
	 */
    jobCommentInfo: function (reg, pageIndex, type) {
        var _serviceURL = reg + '/parttimeApplyList';
        var _tempDataHtml = $('#commentdivDemo');
        var dataSrouce = function (pageIndex) {
            var datamodel;
            var _dataHandle = GLOBAL.dataStore.dataHandle;
            var pagesize = 5;
            var _userInfo = GLOBAL.cookie("CustomerMember") ? eval('('
                    + GLOBAL.cookie('CustomerMember') + ')') : {};
            var _parame = {
                'limit': pagesize,
                'start': (pageIndex - 1) * pagesize,
                'type': type,
                'userId': _userInfo.userId,
                'status': 2

            };
            _dataHandle.postData({
                url: _serviceURL,
                parame: _parame,
                async: false,
                success: function (data) {
                    datamodel = data;
                    _tempDataHtml.html("");
                    var _tempTemplate = $('#commentTemplate').html();
                    for (var i = 0; i < data.data.length; i++) {
                        var _dataContent = data.data[i];
                        _dataContent.types=type;
                        _dataContent.workEndTime = GLOBAL.common.covnertDate(_dataContent.workEndTime);
                        _tempDataHtml.append(_tempTemplate.replaceData(_dataContent));
                    }



                },
                error: function (data) {
                    alert('温馨提示：' + data + '!');

                }
            });
            return datamodel;
        };
        var _datas = dataSrouce(pageIndex);
        var num = Math.ceil(_datas.total / _datas.limit);
        $("#kkpager").html("");
        kkpager.generPageHtml({
            pno: pageIndex,
            //总页码
            total: num,
            //总数据条数
            totalRecords: _datas.total,
            mode: 'click',
            click: function (n) {
                this.selectPage(n);
                _datas = dataSrouce(n);


            }

        });

    },

    /**
	 * @兼职评论的下拉学生信息
	 * 
	 */
    getFormeComment: function (reg, bid, jobid, type) {
        var _serviceURL = reg + '/Comments';
        var _tempDataHtml = $('#frmdiv');
        var _tempDataTemplate = $('#studentFrmComment');
        var _dataHandle = GLOBAL.dataStore.dataHandle;
        _tempDataHtml.html('');
        var _userInfo = GLOBAL.cookie("CustomerMember") ? eval('('
                + GLOBAL.cookie('CustomerMember') + ')') : {};
        var _parame;
        if (type == 0) {
            _parame = {
                'type': 1,
                'busUserId': _userInfo.userId,
                'userId': bid,
                'jobId': jobid
            };
        }
        else {
            _parame = {
                'type': 1,
                'busUserId': bid,
                'userId': _userInfo.userId,
                'jobId': jobid
            };
        }

        _dataHandle.postData({
            url: _serviceURL,
            parame: _parame,
          async: false,
            success: function (data) {
                var _dataContent = data.data[0];
                if (type == 1) {
                    $('#studentFrm').html().remove($('.quiz'));
                }
                if (data.data.length > 0) {
                    _dataContent.commentTime = GLOBAL.common.covnertDate(_dataContent.commentTime);
                    $('#frmdiv').append(_tempDataTemplate.html().replaceData(_dataContent));

                }
            },
            error: function (data) {
                alert('温馨提示：' + data + '!');

            }
        });

    },



    /**
     * @待评论的提交评论
     * @reg 路径
     * @busid 兼职id
     * @commentType 1兼职评论的标识  
     * @commentorType //身份识别   2企业    1学生
     */
    btnSubmitSave: function (reg, jobid, keyid, bid) {
        var stars = $('#startNO').html();
        var content = $('#txtContent').val();

        var _serviceURL = reg + '/CommentsInsert';
        var _dataHandle = GLOBAL.dataStore.dataHandle;
        var _parame = {
            'applyId': keyid,  //
            'commentType': 1, //兼职订单
            'commentorType': 2, //身份识别   2企业    1学生
            'content': content,
            'orderId': jobid, //jobid
            'toCommentorId': bid,  //学生ID
            //默认5星
            'score': stars,
            'commentorId': _userInfo.userId //提交人的ID

        };
        _dataHandle.postData({
            url: _serviceURL,
            parame: _parame,
            async: false,
            success: function (data) {
                alert('评论成功！');
                GLOBAL.pagebase.loadCommentInfo(reg, 1, 0);
            },
            error: function (data) {
                alert('温馨提示：' + data + '!');

            }
        });
    },
});