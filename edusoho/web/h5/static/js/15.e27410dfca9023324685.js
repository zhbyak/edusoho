webpackJsonp([15],{vOyK:function(t,e,o){"use strict";Object.defineProperty(e,"__esModule",{value:!0});o("eqfM");var n=o("/QYm"),s=o("Dd8w"),r=o.n(s),i=o("gyMJ"),a=o("NYxO"),u={name:"homework-intro",mixins:[o("VVIM").a],data:function(){return{courseId:null,taskId:null,homework:null}},computed:r()({hasResult:function(){return!!this.homework.latestHomeworkResult}},Object(a.mapState)({isLoading:function(t){return t.isLoading},user:function(t){return t.user}})),created:function(){this.getInfo()},beforeRouteEnter:function(t,e,o){document.getElementById("app").style.background="#f6f6f6",o()},beforeRouteLeave:function(t,e,o){document.getElementById("app").style.background="",o()},methods:r()({},Object(a.mapActions)("course",["handHomeworkdo"]),{getInfo:function(){var e=this;this.courseId=this.$route.query.courseId,this.taskId=this.$route.query.taskId,i.a.getHomeworkIntro({query:{courseId:this.courseId,taskId:this.taskId}}).then(function(t){e.homework=t.homework,e.interruption()})},interruption:function(){var o=this;this.canDoing(this.homework.latestHomeworkResult,this.user.id).then(function(){o.startHomework()}).catch(function(t){var e=t.answer;o.submitHomework(e)})},showResult:function(){this.$router.push({name:"homeworkResult",query:{homeworkId:this.homework.id,homeworkResultId:this.homework.latestHomeworkResult.id,courseId:this.$route.query.courseId,taskId:this.taskId}})},startHomework:function(){this.$router.push({name:"homeworkDo",query:{targetId:this.taskId,homeworkId:this.homework.id,courseId:this.$route.query.courseId},params:{KeepDoing:!0}})},submitHomework:function(t){var e=this,o={answer:t,homeworkId:this.homework.id,userId:this.user.id,homeworkResultId:this.homework.latestHomeworkResult.id};this.handHomeworkdo(o).then(function(t){e.showResult()}).catch(function(t){n.a.fail(t.message)})}})},c={render:function(){var e=this,t=e.$createElement,o=e._self._c||t;return o("div",[e.isLoading?o("e-loading"):e._e(),e._v(" "),e.homework?o("div",{staticClass:"intro-body"},[o("van-panel",{staticClass:"panel intro-panel",attrs:{title:"作业名称"}},[o("div",{staticClass:"intro-panel__content intro-panel__content--title"},[e._v(e._s(e.homework.name))])]),e._v(" "),o("van-panel",{staticClass:"panel intro-panel",attrs:{title:"作业说明"}},[o("div",{staticClass:"intro-panel__content",domProps:{innerHTML:e._s(e.homework.description)}})])],1):e._e(),e._v(" "),e.homework?o("div",{staticClass:"intro-footer"},[e.hasResult?o("van-button",{staticClass:"intro-footer__btn",attrs:{type:"primary"},on:{click:e.showResult}},[e._v("查看结果")]):o("van-button",{staticClass:"intro-footer__btn",attrs:{type:"primary"},on:{click:function(t){e.startHomework()}}},[e._v("开始答题")])],1):e._e()],1)},staticRenderFns:[]};var h=o("VU/8")(u,c,!1,function(t){o("z5gN")},null,null);e.default=h.exports},z5gN:function(t,e){}});