<div id="form_all">
 <span class="heading">Department</span>
 <form action=""  method="post" id="bom_department"  name="bom_department" class="bom_department">
  <div id ="form_header">
   <div id="tabsHeader">
    <ul class="tabMain">
     <li><a href="#tabsHeader-1">Basic Info</a></li>
     <li><a href="#tabsHeader-2">Attachments</a></li>
     <li><a href="#tabsHeader-3">Notes</a></li>
    </ul>
    <div class="tabContainer"> 
     <div id="tabsHeader-1" class="tabContent">
      <div class="large_shadow_box"> 
       <ul class="column header_field">
        <li><label><img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="bom_department_id select_popup clickable">
          Department Id</label><?php echo $f->text_field_dsr('bom_department_id'); ?>
         <a name="show" href="form.php?class_name=bom_department&<?php echo "mode=$mode"; ?>" class="show document_id bom_department_id"><i class="fa fa-refresh"></i></a> 
        </li>
        <li><label>Inventory(1)</label><?php echo form::select_field_from_object('org_id', org::find_all_inventory(), 'org_id', 'org', $$class->org_id, 'org_id', $readonly); ?>        </li>
        <li><label>Department(2)</label><?php echo form::text_field_d('department'); ?></li>
        <li><label>Description</label><?php echo form::text_field_d('description'); ?></li>
        <li><label>Department Type</label><?php echo form::select_field_from_object('department_type', $class::bom_department_type(), 'option_line_id', 'option_line_code', $$class->department_type, 'department_type', $readonly, 'department_type'); ?>        </li>
        <li><label>Status</label><?php echo form::status_field($$class->status, $readonly); ?></li>
       </ul>
      </div>
     </div>
     <div id="tabsHeader-2" class="tabContent">
      <div> <?php echo ino_attachement($file) ?> </div>
     </div>
     <div id="tabsHeader-3" class="tabContent">
      <div> 
       <div id="comments">
        <div id="comment_list">
         <?php echo!(empty($comments)) ? $comments : ""; ?>
        </div>
        <div id ="display_comment_form">
         <?php
         $reference_table = 'bom_department';
         $reference_id = $$class->bom_department_id;
         ?>
        </div>
        <div id="new_comment">
        </div>
       </div>
      </div>
     </div>
    </div>

   </div>
  </div>
 </form>
 <div id ="form_line" class="form_line"><span class="heading"> Department Details </span>
  <div id="tabsLine">
   <ul class="tabMain">
    <li><a href="#tabsLine-1">Resource Assignment</a></li>
    <li><a href="#tabsLine-2">Overhead Rates </a></li>
   </ul>
   <div class="tabContainer"> 
    <form action=""  method="post" id="bom_department_resource_assignment_line"  name="bom_department_resource_assignment_line">
     <div id="tabsLine-1" class="tabContent">
      <table class="form_line_data_table">
       <thead> 
        <tr>
         <th>Action</th>
         <th>Resource Assignment Id</th>
         <th>Cost Type</th>
         <th>Resource</th>
         <th>Efficiency %</th>
         <th>Utilization %</th>
         <th>No of Units</th>
        </tr>
       </thead>
       <tbody class="form_data_line_tbody bom_department_resource_assignment_values" >
        <?php
        $count = 0;
        foreach ($bom_department_resource_assignment_object as $bom_department_resource_assignment) {
         ?>         
         <tr class="bom_department_resource_assignment<?php echo $count ?>">
          <td>
           <?php
           echo ino_inline_action($$class_second->bom_department_resource_assignment_id, array('bom_department_id' => $$class->bom_department_id));
           ?>
          </td>
          <td><?php $f->text_field_wid2sr('bom_department_resource_assignment_id'); ?></td>
          <td>
           <?php echo form::select_field_from_object('cost_type_id', bom_cost_type::find_all(), 'bom_cost_type_id', 'cost_type', $$class_second->cost_type_id, '', $readonly, 'cost_type_id'); ?>
          </td>
          <td>
           <?php echo form::select_field_from_object('resource_id', bom_resource::find_all(), 'bom_resource_id', 'resource', $$class_second->resource_id, '', $readonly, 'resource_id'); ?>
          </td>
          <td><?php form::number_field_wid2s('efficiency') ?></td>
          <td><?php form::number_field_wid2s('utilization') ?></td>
          <td><?php form::number_field_wid2s('no_of_units') ?></td>
         </tr>
         <?php
         $count = $count + 1;
        }
        ?>
       </tbody>
      </table>
     </div>
    </form>
   </div>

  </div>
 </div> 
</div>


<div id="js_data">
 <ul id="js_saving_data">
  <li class="headerClassName" data-headerClassName="bom_department" ></li>
  <li class="lineClassName" data-lineClassName="bom_department_resource_assignment" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="false" ></li>
  <li class="primary_column_id" data-primary_column_id="bom_department_id" ></li>
  <li class="form_header_id" data-form_header_id="bom_department" ></li>
  <li class="line_key_field" data-line_key_field="resource_id" ></li>
  <li class="single_line" data-single_line="false" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedaderId" data-docHedaderId="bom_department_id" ></li>
  <li class="docLineId" data-docLineId="bom_overhead_resource_assignment_id" ></li>
  <li class="btn1DivId" data-btn1DivId="bom_department" ></li>
  <li class="btn2DivId" data-btn2DivId="form_line" ></li>
  <li class="trClass" data-docHedaderId="bom_overhead" ></li>
  <li class="tbodyClass" data-tbodyClass="form_data_line_tbody" ></li>
  <li class="noOfTabbs" data-noOfTabbs="1" ></li>
 </ul>
</div>