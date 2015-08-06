<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php  include("import_jeasyui.php"); ?>



    <h2>THAICLEFT2015 SYSTEM</h2>
    <div style="margin:20px 0 10px 0;"></div>
    <div class="easyui-tabs" style="width:1700px;height:700px">
        <div title="Registration Management" style="padding:10px" data-options="iconCls:'icon-man',closable:false">
            <p style="font-size:14px">Registration Management SYSTEM</p>
            
            
            
            
            <!-- TAB 1 -->

    <table id="tt" class="easyui-datagrid" style="width:1600px;height:500px"
         
             url="../../serv/json_register.php"
            title="Load Data" iconCls="icon-save"
            sortName="itemid" sortOrder="asc"
            rownumbers="true" pagination="true">
        <thead>
            <tr>
                
                <!--
                <th field="itemid" width="80" sortable="true">Item ID</th>
                <th field="productid" width="100" sortable="true">Product ID</th>
                <th field="listprice" width="80" align="right" sortable="true">List Price</th>
                <th field="unitcost" width="80" align="right" sortable="true">Unit Cost</th>
                <th field="attr1" width="220">Attribute</th>
                <th field="status" width="60" align="center">Stauts</th>
                -->
                
                <th field="id_register" width="80" sortable="true"> Item ID </th>
                
               <!--  <th field="title_detail" width="80" sortable="true"> Title </th> -->
                 <th field="register_detail" width="300" sortable="true"> Status Register  </th>
                   <th field="course" width="100" sortable="true">    Course      </th> 
               <th field="lastname" width="80" sortable="true">  Last name  </th>
                <th field="firstname" width="80" sortable="true">  First name  </th>
                <th field="email" width="200" sortable="true">  E-Mail   </th>
                 <th field="phone" width="90" sortable="true">  Phone    </th>
                 <th field="fax" width="90" sortable="true">  Fax     </th>
                 <th field="organization" width="250" sortable="true">  Organization      </th>
               <th field="address" width="250" sortable="true">   Address       </th>
                <th field="notaddress" width="200" sortable="true">    Address (cont' d)      </th>
                <th field="city" width="80" sortable="true">    City      </th>
                <th field="zipcode" width="100" sortable="true">    Zip/Postal code       </th>
                <th field="country" width="100" sortable="true">    Country        </th>
             
                
                <!--
                <th field="payment" width="100" sortable="true">     Payment       </th>
                -->
               
                
            </tr>
        </thead>
    </table> 
            

  <div class="demo-info" style="margin-bottom:10px"></div>
    <div class="easyui-panel" title="Search Status " style="width:600px;padding:10px;">
        <form id="fr_status" action="../../serv/search_register.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Status Register :</td>
                    <td>
                       
                        
                       
   
  <select class="easyui-combobox" name="state" style="width:300px;">
        <option value="1">1. Keynote speaker | Invited speaker ( วิทยากร )</option>
        <option value="2">2. Persentation ( ผู้นำเสนอผลงาน )</option>
        <option value="3">3. Participants ( ผู้เข้าร่วมประชุม )</option>
  </select>        
                    
                    </td>
                </tr>
      
                <tr>
                    <td></td>
                    <td>
                        
                        <input type="submit" value="Submit"></input>
                    
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <style scoped>
        .f1{
            width:200px;
        }
    </style>
    
    <!--
    <script type="text/javascript">
        $(function(){
            $('#fr_status').form({
                success:function(data){
                  //$.messager.alert('Info', data, 'info');
                  
                }
            });
        });
    </script>           
        -->
        
        <script type="text/javascript">
             $(function(){
            $('#fr_status').form('submit',function(){
                url:'../../serv/search_register.php'
               // $.messager.alert('Info', data, 'info');
            });
        });
        </script>  

            

            <!-- TAB 1 -->
            
            
            
            
        </div>
        <div title="Abstracts Submission" style="padding:10px" data-options="iconCls:'icon-man',closable:false">
            <!-- <ul class="easyui-tree" data-options="method:'post',animate:true"></ul> -->
            <p style="font-size:14px">Abstracts Submission</p>
            <!-- Abstracts Submission -->
            
            <!-- TAB 2 -->
             <table id="tt" class="easyui-datagrid" style="width:1600px;height:500px"
         
             url="../../serv/json_abstract.php"
            title="Load Data" iconCls="icon-save"
            sortName="itemid" sortOrder="asc"
            rownumbers="true" pagination="true">
        <thead>
            <tr>
                  <th field="id_abstract" width="80" sortable="true"> ID </th>
                  
                    <!--<th field="presenter" width="100" sortable="true">  Presenter </th>-->

                     <th field="detail_presenter" width="100" sortable="true">  Presenter </th>
                  
                  <th field="firstname" width="100" sortable="true">  Name </th>
                  <th field="middlename" width="100" sortable="true">  Middle name </th>
             
                   
                   <th field="lastname" width="100" sortable="true">  Last name </th>
                   
                  <!-- <th field="type_presenter" width="100" sortable="true">  type_presenter </th> -->
                   
                   
                   <th field="detail_type" width="140" sortable="true">  Type of presentation </th>
                  
                  <th field="title" width="350" sortable="true">  Abstract Title </th>      
                  <th field="authors" width="350" sortable="true">  Authors </th>   
                  <th field="organization" width="350" sortable="true">  Office address </th>
                  <th field="email" width="200" sortable="true">  E-Mail </th>   
                  
                  <!--
                  <th field="textdetail" width="200" sortable="true">  textdetail </th>
                  -->
                  
                  <th field="tel" width="100" sortable="true">  Phone number  </th>
                  
                  
            </tr>
        </thead>
            </table>  
             <!-- TAB 2 -->
            
        </div>
        <div title="Logout System"  style="padding:10px" data-options="iconCls:'icon-search',closable:false">
            <a href="fr_login.php" class="easyui-linkbutton" data-options="iconCls:'icon-save'" style="width:80px">Logout</a>
            
   
        </div>
    </div>

