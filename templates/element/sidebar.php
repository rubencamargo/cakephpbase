<nav id="sidebarMenu" class="bg-dark h-100 p-4">
    <div>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a class="nav-link link-light active" aria-current="page" href="#">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link('Roles', '/admin/roles', ['class' => 'nav-link link-light']); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link('Users', '/admin/users', ['class' => 'nav-link link-light']); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link('Countries', '/admin/countries', ['class' => 'nav-link link-light']); ?>
            </li>
        </ul>
    </div>
</nav>