<nav id="sidebarMenu">
    <div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link('Roles', '/admin/roles', ['class' => 'nav-link']); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link('Users', '/admin/users', ['class' => 'nav-link']); ?>
            </li>
        </ul>
    </div>
</nav>