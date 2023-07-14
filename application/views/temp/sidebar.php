 <?php $uri = $this->uri->segment('1'); ?>
 <?php $suburi = $this->uri->segment('2'); ?>
 <!-- Menu -->
 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="<?= base_url('dashboard'); ?>">
             <img src="<?= base_url('assets/logo/transparent-bpr1.png'); ?>" alt="logo" height="60">
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1">
         <!-- Dashboard -->
         <li class="menu-item  <?php echo ($uri == '' || $uri == 'dashboard') ? 'active' : '' ?>">
             <a href="<?= base_url('dashboard'); ?>" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-home-circle"></i>
                 <div data-i18n="Analytics">Dashboard</div>
             </a>
         </li>

         <!-- Layouts -->
         <li class="menu-item <?php echo ($uri == 'common') ? 'active open' : '' ?>">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-layout"></i>
                 <div data-i18n="Layouts">Settings</div>
             </a>

             <ul class="menu-sub">
                 <li class="menu-item <?php echo ($suburi == 'parameter') ? 'active' : '' ?>">
                     <a href="<?= base_url('common/parameter'); ?>" class="menu-link">
                         <div data-i18n="Without menu">Parameter</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'user_management') ? 'active' : '' ?>">
                     <a href="<?= base_url('common/user_management'); ?>" class="menu-link">
                         <div data-i18n="Without navbar">User Management</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'module_document') ? 'active' : '' ?>">
                     <a href="<?= base_url('common/module_document'); ?>" class="menu-link">
                         <div data-i18n="Container">Module Document</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'importing') ? 'active' : '' ?>">
                     <a href="<?= base_url('common/importing'); ?>" class="menu-link">
                         <div data-i18n="Fluid">Import Data Staging</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'mapping') ? 'active' : '' ?>">
                     <a href="<?= base_url('common/mapping'); ?>" class="menu-link">
                         <div data-i18n="Blank">Mapping Module RR</div>
                     </a>
                 </li>
                 <!--<li class="menu-item">-->
                 <!--  <a href="common/backup_restore.html" class="menu-link">-->
                 <!--    <div data-i18n="Blank">Backup/Restore</div>-->
                 <!--  </a>-->
                 <!--</li>-->
             </ul>
         </li>
         <li class="menu-item <?php echo ($uri == 'apollo') ? 'active open' : '' ?>">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-layout"></i>
                 <div data-i18n="Layouts">Apolo</div>
             </a>

             <ul class="menu-sub">
                 <li class="menu-item <?php echo ($suburi == 'report_process') ? 'active' : '' ?>">
                     <a href="<?= base_url('apollo/report_process'); ?>" class="menu-link">
                         <div data-i18n="Without menu">Report Process</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'form_report') ? 'active' : '' ?>">
                     <a href="<?= base_url('apollo/form_report'); ?>" class="menu-link">
                         <div data-i18n="Without navbar">Form Report</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'mapping_gl') ? 'active' : '' ?>">
                     <a href="<?= base_url('apollo/mapping_gl'); ?>" class="menu-link">
                         <div data-i18n="Container">Mapping GL</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'data_report') ? 'active' : '' ?>">
                     <a href="<?= base_url('apollo/data_report'); ?>" class="menu-link">
                         <div data-i18n="Fluid">Data Report</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'backup_restore') ? 'active' : '' ?>">
                     <a href="<?= base_url('apollo/backup_restore'); ?>" class="menu-link">
                         <div data-i18n="Blank">Backup/Restore</div>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="menu-item <?php echo ($uri == 'slik') ? 'active open' : '' ?>">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-layout"></i>
                 <div data-i18n="Layouts">SLIK</div>
             </a>

             <ul class="menu-sub">
                 <li class="menu-item <?php echo ($suburi == 'report_proces') ? 'active' : '' ?>">
                     <a href="<?= base_url('slik/report_proces'); ?>" class="menu-link">
                         <div data-i18n="Without menu">Report Process</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'form_report') ? 'active' : '' ?>">
                     <a href="<?= base_url('slik/form_report'); ?>" class="menu-link">
                         <div data-i18n="Without navbar">Form Report</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'backup_restore') ? 'active' : '' ?>">
                     <a href="<?= base_url('slik/backup_restore'); ?>" class="menu-link">
                         <div data-i18n="Blank">Backup/Restore</div>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="menu-item <?php echo ($uri == 'obox') ? 'active open' : '' ?>">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-layout"></i>
                 <div data-i18n="Layouts">OBOX</div>
             </a>

             <ul class="menu-sub">
                 <li class="menu-item <?php echo ($suburi == 'report_proces') ? 'active' : '' ?>">
                     <a href="<?= base_url('obox/report_proces'); ?>" class="menu-link">
                         <div data-i18n="Without menu">Report Process</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'form_report') ? 'active' : '' ?>">
                     <a href="<?= base_url('obox/form_report'); ?>" class="menu-link">
                         <div data-i18n="Without navbar">Form Report</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'backup_restore') ? 'active' : '' ?>">
                     <a href="<?= base_url('obox/backup_restore'); ?>" class="menu-link">
                         <div data-i18n="Blank">Backup/Restore</div>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="menu-item <?php echo ($uri == 'sipina') ? 'active open' : '' ?>">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-layout"></i>
                 <div data-i18n="Layouts">SIPINA</div>
             </a>

             <ul class="menu-sub">
                 <li class="menu-item <?php echo ($suburi == 'report_proces') ? 'active' : '' ?>">
                     <a href="<?= base_url('sipina/report_proces'); ?>" class="menu-link">
                         <div data-i18n="Without menu">Report Process</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'form_report') ? 'active' : '' ?>">
                     <a href="<?= base_url('sipina/form_report'); ?>" class="menu-link">
                         <div data-i18n="Without navbar">Form Report</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'backup_restore') ? 'active' : '' ?>">
                     <a href="<?= base_url('sipina/backup_restore'); ?>" class="menu-link">
                         <div data-i18n="Blank">Backup/Restore</div>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="menu-item <?php echo ($uri == 'sipesat') ? 'active open' : '' ?>">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-layout"></i>
                 <div data-i18n="Layouts">SIPESAT</div>
             </a>

             <ul class="menu-sub">
                 <li class="menu-item <?php echo ($suburi == 'report_proces') ? 'active' : '' ?>">
                     <a href="<?= base_url('sipesat/report_proces'); ?>" class="menu-link">
                         <div data-i18n="Without menu">Report Process</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'form_report') ? 'active' : '' ?>">
                     <a href="<?= base_url('sipesat/form_report'); ?>" class="menu-link">
                         <div data-i18n="Without navbar">Form Report</div>
                     </a>
                 </li>
                 <li class="menu-item <?php echo ($suburi == 'backup_restore') ? 'active' : '' ?>">
                     <a href="<?= base_url('sipesat/backup_restore'); ?>" class="menu-link">
                         <div data-i18n="Blank">Backup/Restore</div>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="menu-item">
             <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-layout"></i>
                 <div data-i18n="Layouts">EOI</div>
             </a>

             <ul class="menu-sub">
                 <li class="menu-item">
                     <a href="#" class="menu-link">
                         <div data-i18n="Without menu">Report Process</div>
                     </a>
                 </li>
                 <li class="menu-item">
                     <a href="#" class="menu-link">
                         <div data-i18n="Without navbar">Report</div>
                     </a>
                 </li>
                 <li class="menu-item">
                     <a href="eoi/backup_restore.html" class="menu-link">
                         <div data-i18n="Blank">Backup/Restore</div>
                     </a>
                 </li>
             </ul>
         </li>
     </ul>
 </aside>
 <!-- / Menu -->