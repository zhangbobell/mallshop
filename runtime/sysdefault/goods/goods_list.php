<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>后台管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo IUrl::creatUrl("")."views/".$this->theme."/skin/".$this->skin."/css/admin.css";?>" />
	<meta name="robots" content="noindex,nofollow">
	<link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript" charset="UTF-8" src="/runtime/_systemjs/jquery/jquery-1.9.0.min.js"></script><script type="text/javascript" charset="UTF-8" src="/runtime/_systemjs/jquery/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" charset="UTF-8" src="/runtime/_systemjs/artdialog/artDialog.js"></script><script type="text/javascript" charset="UTF-8" src="/runtime/_systemjs/artdialog/plugins/iframeTools.js"></script><link rel="stylesheet" type="text/css" href="/runtime/_systemjs/artdialog/skins/default.css" />
	<script type="text/javascript" charset="UTF-8" src="/runtime/_systemjs/form/form.js"></script>
	<script type="text/javascript" charset="UTF-8" src="/runtime/_systemjs/autovalidate/validate.js"></script><link rel="stylesheet" type="text/css" href="/runtime/_systemjs/autovalidate/style.css" />
	<script type="text/javascript" charset="UTF-8" src="/runtime/_systemjs/artTemplate/artTemplate.js"></script><script type="text/javascript" charset="UTF-8" src="/runtime/_systemjs/artTemplate/artTemplate-plugin.js"></script>
	<script type='text/javascript' src="<?php echo IUrl::creatUrl("")."views/".$this->theme."/javascript/common.js";?>"></script>
	<script type='text/javascript' src="<?php echo IUrl::creatUrl("")."views/".$this->theme."/javascript/admin.js";?>"></script>
	<script type='text/javascript' src="<?php echo IUrl::creatUrl("")."views/".$this->theme."/javascript/menu.js";?>"></script>
</head>
<body>
	<div class="container">
		<div id="header">
			<div class="logo">
				<a href="<?php echo IUrl::creatUrl("/system/default");?>"><img src="<?php echo IUrl::creatUrl("")."views/".$this->theme."/skin/".$this->skin."/images/admin/logo.gif";?>" width="303" height="43" /></a>
			</div>
			<div id="menu">
				<ul name="menu">
				</ul>
			</div>
			<p><a href="<?php echo IUrl::creatUrl("/systemadmin/logout");?>">退出管理</a> <a href="<?php echo IUrl::creatUrl("/system/default");?>">后台首页</a> <a href="<?php echo IUrl::creatUrl("");?>" target='_blank'>商城首页</a> <span>您好 <label class='bold'><?php echo isset($this->admin['admin_name'])?$this->admin['admin_name']:"";?></label>，当前身份 <label class='bold'><?php echo isset($this->admin['admin_role_name'])?$this->admin['admin_role_name']:"";?></label></span></p>
		</div>
		<div id="info_bar">
			<label class="navindex"><a href="<?php echo IUrl::creatUrl("/system/navigation");?>">快速导航管理</a></label>
			<span class="nav_sec">
			<?php $adminId = $this->admin['admin_id']?>
			<?php $query = new IQuery("quick_naviga");$query->where = "admin_id = $adminId and is_del = 0";$items = $query->find(); foreach($items as $key => $item){?>
			<a href="<?php echo isset($item['url'])?$item['url']:"";?>" class="selected"><?php echo isset($item['naviga_name'])?$item['naviga_name']:"";?></a>
			<?php }?>
			</span>
		</div>

		<div id="admin_left">
			<ul class="submenu"></ul>
			<div id="copyright"></div>
		</div>

		<div id="admin_right">
			<script type="text/javascript" charset="UTF-8" src="/runtime/_systemjs/artTemplate/artTemplate.js"></script><script type="text/javascript" charset="UTF-8" src="/runtime/_systemjs/artTemplate/artTemplate-plugin.js"></script>

<div class="headbar">
	<div class="position"><span>商品</span><span>></span><span>商品管理</span><span>></span><span>商品列表</span></div>
	<div class="operating">
		<div class="search f_r">
			<form name="searchModForm" action="<?php echo IUrl::creatUrl("/");?>" method="get">
				<input type='hidden' name='controller' value='goods' />
				<input type='hidden' name='action' value='goods_list' />
				<select class="auto" name="search[name]">
					<option value="go.name">商品名</option>
					<option value="go.goods_no">商品货号</option>
					<option value="seller.true_name">商户真实名称</option>
				</select>
				<input class="small" name="search[keywords]" type="text" value="" />
				<button class="btn" type="submit"><span class="sch">搜 索</span></button>
			</form>
		</div>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="window.location.href='<?php echo IUrl::creatUrl("/goods/goods_edit");?>'"><span class="addition">添加商品</span></button></a>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="selectAll('id[]')"><span class="sel_all">全选</span></button></a>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="goods_del()"><span class="delete">批量删除</span></button></a>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="goods_stats('up')"><span class="import">批量上架</span></button></a>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="goods_stats('down')"><span class="export">批量下架</span></button></a>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="goods_stats('check')"><span class="export">批量待审</span></button></a>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="importCsvPacket();"><span class="combine">CSV商品导入</span></button></a>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="goodsCollect();"><span class="export">商品采集器</span></button></a>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="window.location.href='<?php echo IUrl::creatUrl("/goods/goods_recycle_list");?>'"><span class="recycle">回收站</span></button></a>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="goodsCommend();"><span class="grade">批量推荐</span></button></a>
	</div>

	<div class="searchbar">
		<form action="<?php echo IUrl::creatUrl("/");?>" method="get" name="searchListForm">
			<input type='hidden' name='controller' value='goods' />
			<input type='hidden' name='action' value='goods_list' />
			<select class="auto" name="search[seller_id]">
				<option value="">选择商品所属</option>
				<option value="=0">平台商品</option>
				<option value="!=0">商户商品</option>
			</select>
			<select class="auto" name="search[category_id]">
				<option value="">选择分类</option>
				<?php $query = new IQuery("category");$items = $query->find(); foreach($items as $key => $item){?>
				<option value="<?php echo isset($item['id'])?$item['id']:"";?>"><?php echo isset($item['name'])?$item['name']:"";?></option>
				<?php }?>
			</select>
			<select class="auto" name="search[is_del]">
				<option value="">选择上下架</option>
				<option value="0">上架</option>
				<option value="2">下架</option>
				<option value="3">待审</option>
			</select>
			<select class="auto" name="search[store_nums]">
				<option value="">选择库存</option>
				<option value="go.store_nums < 1">无货</option>
				<option value="go.store_nums >= 1 and go.store_nums < 10">低于10</option>
				<option value="go.store_nums <= 100 and go.store_nums >= 10">10-100</option>
				<option value="go.store_nums >= 100">100以上</option>
			</select>
			<select class="auto" name="search[commend_id]">
				<option value="">选择商品标签</option>
				<option value="1">最新商品</option>
				<option value="2">特价商品</option>
				<option value="3">热卖商品</option>
				<option value="4">推荐商品</option>
			</select>
			<button class="btn" type="submit"  onclick='changeAction(false)'><span class="sel">筛 选</span></button>
			<button class="btn" onclick='changeAction(true)'><span class="sel">导出Excel</span></button>
		</form>
	</div>

	<div class="field">
		<table class="list_table">
			<colgroup>
				<col width="40px" />
				<col width="420px" />
				<col width="180px" />
				<col width="90px" />
				<col width="70px" />
				<col width="80px" />
				<col width="70px" />
				<col />
			</colgroup>

			<thead>
				<tr>
					<th>选择</th>
					<th>商品名称</th>
					<th>分类</th>
					<th>销售价</th>
					<th>库存</th>
					<th>状态</th>
					<th>排序</th>
					<th>操作</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form action="" method="post" name="orderForm">
	<div class="content">
		<table class="list_table">
			<colgroup>
				<col width="40px" />
				<col width="420px" />
				<col width="180px" />
				<col width="90px" />
				<col width="70px" />
				<col width="80px" />
				<col width="70px" />
				<col />
			</colgroup>

			<tbody>
				<?php foreach($this->goodsHandle->find() as $key => $item){?>
				<tr>
					<td><input name="id[]" type="checkbox" value="<?php echo isset($item['id'])?$item['id']:"";?>" /></td>
					<td><img src='<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."/w/100/h/100");?>' class='ico' /><a class="orange" href="javascript:jumpUrl('<?php echo isset($item['is_del'])?$item['is_del']:"";?>','<?php echo IUrl::creatUrl("/site/products/id/".$item['id']."");?>')" title="<?php echo isset($item['name'])?$item['name']:"";?>"><?php echo isset($item['name'])?$item['name']:"";?></a></td>
					<td>
					<?php $catName = array()?>
					<?php $query = new IQuery("category_extend as ce");$query->join = "left join category as cd on cd.id = ce.category_id";$query->fields = "cd.name";$query->where = "goods_id = $item[id]";$items = $query->find(); foreach($items as $key => $catData){?>
						<?php $catName[] = $catData['name']?>
					<?php }?>
					<?php echo join(',',$catName);?>
					</td>
					<td><a href="javascript:quickEdit(<?php echo isset($item['id'])?$item['id']:"";?>,'price');" class="orange" title="点击更新价格" id="priceText<?php echo isset($item['id'])?$item['id']:"";?>"><?php echo isset($item['sell_price'])?$item['sell_price']:"";?></a></td>
					<td><a href="javascript:quickEdit(<?php echo isset($item['id'])?$item['id']:"";?>,'store');" class="orange" title="点击更新库存" id="storeText<?php echo isset($item['id'])?$item['id']:"";?>"><?php echo isset($item['store_nums'])?$item['store_nums']:"";?></a></td>
					<td>
						<select onchange="changeIsDel(<?php echo isset($item['id'])?$item['id']:"";?>,this)">
							<option value="up" <?php echo $item['is_del']==0 ? 'selected':'';?>>上架</option>
							<option value="down" <?php echo $item['is_del']==2 ? 'selected':'';?>>下架</option>
							<option value="check" <?php echo $item['is_del']==3 ? 'selected':'';?>>待审</option>
						</select>
					</td>
					<td><input type="text" class="tiny" value="<?php echo isset($item['sort'])?$item['sort']:"";?>" onchange="changeSort(<?php echo isset($item['id'])?$item['id']:"";?>,this);" /></td>
					<td>
						<a href="<?php echo IUrl::creatUrl("/goods/goods_edit/id/".$item['id']."");?>"><img class="operator" src="<?php echo IUrl::creatUrl("")."views/".$this->theme."/skin/".$this->skin."/images/admin/icon_edit.gif";?>" alt="编辑" /></a>
						<a href="javascript:void(0)" onclick="delModel({link:'<?php echo IUrl::creatUrl("/goods/goods_del/id/".$item['id']."");?>'})" ><img class="operator" src="<?php echo IUrl::creatUrl("")."views/".$this->theme."/skin/".$this->skin."/images/admin/icon_del.gif";?>" alt="删除" /></a>
						<?php if($item['seller_id']){?>
						<a href="<?php echo IUrl::creatUrl("/site/home/id/".$item['seller_id']."");?>" target="_blank" title="<?php echo isset($item['true_name'])?$item['true_name']:"";?>"><img title="<?php echo isset($item['true_name'])?$item['true_name']:"";?>" src="<?php echo IUrl::creatUrl("")."views/".$this->theme."/skin/".$this->skin."/images/admin/seller_ico.png";?>" /></a>
						<?php }?>
					</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</form>

<?php echo $this->goodsHandle->getPageBar();?>

<!--库存更新模板-->
<script id="goodsStoreTemplate" type="text/html">
<form name="quickEditForm">
<table class="border_table" style="width:100%">
	<thead>
		<tr>
			<th>商品</th>
			<th>库存量</th>
		</tr>
	</thead>
	<tbody>
	<%for(var item in templateData){%>
		<%item=templateData[item]%>
		<tr>
			<td>
				<%=item['name']%>
				&nbsp;&nbsp;&nbsp;
				<%if(item['spec_array']){%>
					<%var specArrayList = parseJSON(item['spec_array'])%>
					<%for(var result in specArrayList){%>
						<%result = specArrayList[result]%>
						<%if(result['type'] == 1){%>
							<%=result['value']%>
						<%}else{%>
							<img class="img_border" width="30px" height="30px" src="<?php echo IUrl::creatUrl("")."<%=result['value']%>";?>">
						<%}%>
						&nbsp;&nbsp;&nbsp;
					<%}%>
				<%}%>
			</td>
			<td>
				<input type="text" class="small" name="data[<%=item['id']%>]" value="<%=item['store_nums']%>" />
			</td>
		</tr>
	<%}%>
	</tbody>
</table>
<input type='hidden' name='goods_id' value="<%=item['goods_id']%>" />
</form>
</script>

<!--价格更新的模板-->
<script id="goodsPriceTemplate" type="text/html">
<form name="quickEditForm">
<table class="border_table" style="width:100%">
	<thead>
		<tr>
			<th>商品</th>
			<th>市场价</th>
			<th>销售价</th>
			<th>成本价</th>
		</tr>
	</thead>
	<tbody>
	<%for(var item in templateData){%>
		<%item=templateData[item]%>
		<tr>
			<td>
				<%=item['name']%>
				&nbsp;&nbsp;&nbsp;
				<%if(item['spec_array']){%>
					<%var specArrayList = parseJSON(item['spec_array'])%>
					<%for(var result in specArrayList){%>
						<%result = specArrayList[result]%>
						<%if(result['type'] == 1){%>
							<%=result['value']%>
						<%}else{%>
							<img class="img_border" width="30px" height="30px" src="<?php echo IUrl::creatUrl("")."<%=result['value']%>";?>">
						<%}%>
						&nbsp;&nbsp;&nbsp;
					<%}%>
				<%}%>
			</td>
			<td><input type="text" class="small" name="data[<%=item['id']%>][market_price]" value="<%=item['market_price']%>" /></td>
			<td><input type="text" class="small" name="data[<%=item['id']%>][sell_price]" value="<%=item['sell_price']%>" /></td>
			<td><input type="text" class="small" name="data[<%=item['id']%>][cost_price]" value="<%=item['cost_price']%>" /></td>
		</tr>
	<%}%>
	</tbody>
</table>
<input type='hidden' name='goods_id' value="<%=item['goods_id']%>" />
</form>
</script>

<!--推荐更新模板-->
<script id="goodsCommendTemplate" type="text/html">
<form name="commendForm">
<table class="border_table" style="width:100%">
	<thead>
		<tr>
			<th>商品</th>
			<th>推荐选项</th>
		</tr>
	</thead>
	<tbody>
	<%for(var item in templateData){%>
		<%item=templateData[item]%>
		<tr>
			<td>
				<%=item['name']%>
			</td>
			<td>
				<label class="attr"><input type="checkbox" name="data[<%=item['id']%>][]" value="1" <%if(item['commend'] && item['commend'][1]){%>checked="checked"<%}%> />最新商品</label>
				<label class="attr"><input type="checkbox" name="data[<%=item['id']%>][]" value="2" <%if(item['commend'] && item['commend'][2]){%>checked="checked"<%}%> />特价商品</label>
				<label class="attr"><input type="checkbox" name="data[<%=item['id']%>][]" value="3" <%if(item['commend'] && item['commend'][3]){%>checked="checked"<%}%> />热卖商品</label>
				<label class="attr"><input type="checkbox" name="data[<%=item['id']%>][]" value="4" <%if(item['commend'] && item['commend'][4]){%>checked="checked"<%}%> />推荐商品</label>
			</td>
		</tr>
	<%}%>
	</tbody>
</table>
</form>
</script>

<script type="text/javascript">
//DOM加载
$(function(){
	<?php if($this->search){?>
	var searchData = <?php echo JSON::encode($this->search);?>;
	for(var index in searchData)
	{
		$('[name="search['+index+']"]').val(searchData[index]);
	}
	<?php }?>
});

//商品推荐标签
function goodsCommend()
{
	if($('input:checkbox[name="id[]"]:checked').length > 0)
	{
		var idString = [];
		$('input:checkbox[name="id[]"]:checked').each(function(i)
		{
			idString.push(this.value);
		});

		$.getJSON("<?php echo IUrl::creatUrl("/block/goodsCommend");?>",{"id":idString.join(',')},function(json)
		{
			var templateHtml = template.render("goodsCommendTemplate",{'templateData':json});
			art.dialog(
			{
				okVal:"保存",
			    content: templateHtml,
			    ok:function(iframeWin)
			    {
			    	var formObj = iframeWin.document.forms['commendForm'];
			    	$.getJSON("<?php echo IUrl::creatUrl("/goods/update_commend");?>",$(formObj).serialize(),function(content)
			    	{
			    		if(content.result == 'fail')
			    		{
			    			alert(content.data);
			    		}
			    	});
			    }
			});
		});
	}
	else
	{
		alert("请选择您要操作的商品");
	}
}

//展示库存
function quickEdit(gid,typeVal)
{
	var submitUrl    = "";
	var templateName = "";
	var freshArea    = "";

	switch(typeVal)
	{
		case "store":
		{
			submitUrl    = "<?php echo IUrl::creatUrl("/goods/update_store");?>";
			templateName = "goodsStoreTemplate";
			freshArea    = "storeText";
		}
		break;

		case "price":
		{
			submitUrl    = "<?php echo IUrl::creatUrl("/goods/update_price");?>";
			templateName = "goodsPriceTemplate";
			freshArea    = "priceText";
		}
		break;
	}

	$.getJSON("<?php echo IUrl::creatUrl("/block/getGoodsData");?>",{"id":gid},function(json)
	{
		var templateHtml = template.render(templateName,{'templateData':json});
		art.dialog(
		{
			okVal:"保存",
		    content: templateHtml,
		    ok:function(iframeWin)
		    {
		    	var formObj = iframeWin.document.forms['quickEditForm'];
		    	$.getJSON(submitUrl,$(formObj).serialize(),function(content)
		    	{
		    		if(content.result == 'success')
		    		{
		    			$("#"+freshArea+gid).text(content.data);
		    		}
		    		else
		    		{
		    			alert(content.data);
		    		}
		    	});
		    }
		});
	});
}

//修改排序
function changeSort(gid,obj)
{
	var selectedValue = obj.value;
	$.getJSON("<?php echo IUrl::creatUrl("/goods/ajax_sort");?>",{"id":gid,"sort":selectedValue});
}

//修改上下架
function changeIsDel(gid,obj)
{
	var selectedValue = $(obj).find('option:selected').val();
	$.getJSON("<?php echo IUrl::creatUrl("/goods/goods_stats");?>",{"id":gid,"type":selectedValue});
}

//csv导入ui框
function importCsvPacket()
{
	art.dialog.open('<?php echo IUrl::creatUrl("/goods/csvImport");?>',{
		id:'csvImport',
	    title:'导入csv商品数据包',
	    okVal:'开始导入',
	    ok:function(iframeWin, topWin){
	    	var formObject = iframeWin.document.forms[0];
	    	formObject.onsubmit();
	    	loadding();
	    	return false;
	    }
	});
}

//upload csv file callback
function artDialogCallback(message)
{
	message ? alert(message) : window.location.reload();
}

//删除
function goods_del()
{
	var flag = 0;
	$('input:checkbox[name="id[]"]:checked').each(function(i){flag = 1;});
	if(flag == 0)
	{
		alert('请选择要删除的数据');
		return false;
	}
	$("form[name='orderForm']").attr('action','<?php echo IUrl::creatUrl("/goods/goods_del");?>');
	confirm('确定要删除所选中的信息吗？','formSubmit(\'orderForm\')');
}

//上下架操作
function goods_stats(type)
{
	if($('input:checkbox[name="id[]"]:checked').length > 0)
	{
		$("form[name='orderForm']").attr('action','<?php echo IUrl::creatUrl("/goods/goods_stats/type/");?>'+type);
		confirm('确定将选中的商品进行操作吗？',"formSubmit('orderForm')");
	}
	else
	{
		alert('请选择要操作的商品!');
		return false;
	}
}

//商品采集器界面
function goodsCollect()
{
	art.dialog.open('<?php echo IUrl::creatUrl("/goods/collect_import");?>',{
		id:'collect_import',
	    title:'商品采集器',
	    okVal:'开始采集',
	    ok:function(iframeWin, topWin){
	    	var formObject = iframeWin.document.forms[0];
	    	formObject.submit();
	    	loadding();
	    	return false;
	    }
	});
}
//商品详情的跳转连接
function jumpUrl(is_del,url)
{
	is_del == 0 ? window.open(url) : alert("该商品没有上架无法查看");
}
//商品导入或查询切换
function changeAction(excel)
{
	if(excel)
	{
		$("input[name=\"action\"]").val("goods_report");
		$("form[name=\"searchListForm\"]").attr("target", "_blank");
	}
	else
	{
		$("input[name=\"action\"]").val("goods_list");
		$("form[name=\"searchListForm\"]").attr("target", "_self");
	}
}
</script>

		</div>
		<div id="separator"></div>
	</div>

	<script type='text/javascript'>
		//DOM加载完毕执行
		$(function(){
			//隔行换色
			$(".list_table tr:nth-child(even)").addClass('even');
			$(".list_table tr").hover(
				function () {
					$(this).addClass("sel");
				},
				function () {
					$(this).removeClass("sel");
				}
			);

			//后台菜单创建
			<?php $menu = new Menu();?>
			var data = <?php echo $menu->submenu();?>;
			var current = '<?php echo $menu->current;?>';
			var url='<?php echo IUrl::creatUrl("/");?>';
			initMenu(data,current,url);
		});
	</script>
</body>
</html>
