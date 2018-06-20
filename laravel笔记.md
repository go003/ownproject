
#手动创建验证器

第一步引入Validator

	use Validator

第二步在你要验证的方法里添加

		传给 make 方法的第一个参数是要验证的数据。第二个参数则是该数据的验证规则

		第三个参数传递自定义错误消息，
		
		Validator::make(参数1，参数2，参数3)->validate();

        Validator::make($request->all(), [
            'name' => 'required|max:3',
        ], [
            'name.required' => '毛阿莫',
			'name.max' => '不能大于3',
        ])->validate();


第三步显示提示信息

 		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif


#ORM 事务处理
//开启事务 
DB::beginTransaction();
try{ 
//中间逻辑代码 DB::commit(); 
}catch (\Exception $e) { 
//接收异常处理并回滚 DB::rollBack(); 
}


# 	获取当前所在路由名
	\Route::currentRouteName();




#laracel中ajax删除一条数据的
<script>
    //删除分类
    function delArt(art_id) {
        layer.confirm('您确定要删除这篇文章吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("{{url('admin/article/')}}/"+art_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                if(data.status==0){
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 6});
                }else{
                    layer.msg(data.msg, {icon: 5});
                }
            });
        }, function(){

        });
    }
</script>