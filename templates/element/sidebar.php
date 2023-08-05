<nav id="sidebarMenu" class="bg-dark h-100 p-4">
    <div>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <?php
                if ($this->name == "Dashboard") {
                    echo $this->Html->link('<i class="bi-speedometer2"></i> ' . 'Dashboard', '/admin/dashboard', ['class' => 'nav-link link-light active', 'escape' => false]);
                } else {
                    echo $this->Html->link('<i class="bi-speedometer2"></i> ' . 'Dashboard', '/admin/dashboard', ['class' => 'nav-link link-light', 'escape' => false]);
                }
                ?>
            </li>
            <li class="nav-item">
                <?php
                if ($this->name == "Roles") {
                    echo $this->Html->link('<i class="bi-person-vcard"></i> ' . 'Roles', '/admin/roles', ['class' => 'nav-link link-light active', 'escape' => false]);
                } else {
                    echo $this->Html->link('<i class="bi-person-vcard"></i> ' . 'Roles', '/admin/roles', ['class' => 'nav-link link-light', 'escape' => false]);
                }
                ?>
            </li>
            <li class="nav-item">
                <?php
                if ($this->name == "Users") {
                    echo $this->Html->link('<i class="bi-people"></i> ' . 'Users', '/admin/users', ['class' => 'nav-link link-light active', 'escape' => false]);
                } else {
                    echo $this->Html->link('<i class="bi-people"></i> ' . 'Users', '/admin/users', ['class' => 'nav-link link-light', 'escape' => false]);
                }
                ?>
            </li>
            <li class="nav-item">
                <?php
                if ($this->name == "Countries") {
                    echo $this->Html->link('<i class="bi-flag"></i> ' . 'Countries', '/admin/countries', ['class' => 'nav-link link-light active', 'escape' => false]);
                } else {
                    echo $this->Html->link('<i class="bi-flag"></i> ' . 'Countries', '/admin/countries', ['class' => 'nav-link link-light', 'escape' => false]);
                }
                ?>
            </li>
        </ul>
    </div>
</nav>