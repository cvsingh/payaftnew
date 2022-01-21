 <aside class="sidebar-wrapper ">
     <nav class="sidebar-nav">
         <ul class="metismenu" id="menu1">
             <li></li>
             <li class="single-nav-wrapper">
                 <a href="{{ route('employee.dashboard') }}" class="menu-item">
                     <span class="left-icon"><i class="fas fa-home"></i></span>
                     <span style="font-size: 15px; font-weight:bold; text-align:end;">
                         Home
                     </span>
                 </a>
             </li>
             <li class="single-nav-wrapper">
                 <a href="{{ route('letter.view') }}" class="menu-item">
                     <span class="left-icon"><i class="far fa-envelope"></i></span>
                     <span style="font-size: 15px; font-weight:bold; text-align:end;">
                         All Letters
                     </span>
                 </a>
             </li>
             <li class="single-nav-wrapper">
                 <a href="{{ route('letter.inbox') }}" class="menu-item">
                     <span class="left-icon"><i class="fas fa-mobile-alt"></i></span>
                     <span style="font-size: 15px; font-weight:bold; text-align:end;">
                         Inbox
                     </span>
                 </a>
             </li>
         </ul>
     </nav>
 </aside>
