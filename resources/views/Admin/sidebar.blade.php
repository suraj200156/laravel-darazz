<style>
    .sidebar {
        width: 256px;
        height: 100vh;
        display: flex;
        flex-direction: column;
        background-color: #fff;
        padding: 24px;
        gap: 20px;
        position: fixed;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar .head {
        display: flex;
        gap: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f6f6f6;
    }

    .logo {
        width: 200px;
        height: 44px;
        border-radius: 50%;
        object-fit: cover;
    }

    .logo img {
        width: 100%;
        object-fit: cover;
    }

    .user-image {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        object-fit: cover;
    }

    .user-image img {
        width: 100%;
        object-fit: cover;
    }

    .title,
    .menu .title {
        font-size: 10px;
        font-weight: 500;
        color: #757575;
        text-transform: uppercase;
        margin-bottom: 10px;
    }


    .menu ul li {
        list-style: none;
        margin-bottom: 5px;
    }

    .menu ul li a {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
        font-weight: 500;
        color: #757575;
        text-decoration: none;
        padding: 12px 8px;
    }

    .menu ul li a:hover,
    .menu ul li.active a {
        color: #000;
        background-color: #f6f6f6;
    }

    .menu ul li .text {
        flex: 1;
    }

    .menu .sub-menu {
        display: none;
        margin-left: 20px;
        padding-left: 20px;
        padding-top: 5px;
        border-left: 1px solid #f6f6f6;
    }

    .menu .sub-menu li a {
        padding: 10px 8px;
        font-size: 12px;
    }

    .account-menu {
        margin-top: auto;
    }
</style>




<div class="sidebar">
    <div class="head">
        <div class="logo">
            <img src="{{ asset('images/others/logo.PNG') }}" alt="User Image">
        </div>
    </div>
    <div class="nav">
        <div class="menu">
            <p class="title">Main</p>
            <ul>

                <li><a href="{{ route('dashboard')}}"><i class="ph ph-chart-pie-slice"></i><span class="text">Dashboard</span></a></li>
                <li><a href="{{ route('user.view')}}"><i class="ph ph-user-circle"></i><span class="text">User</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="menu-item"><i class="ph ph-stack-plus"></i><span class="text">Add items</span><i class="ph ph-caret-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('category.create')}}"><span class="text">Add Category</span></a></li>
                        <li><a href="{{ route('product.create')}}"><span class="text">Add Product</span></a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:void(0)" class="menu-item"><i class="ph ph-package"></i><span class="text">Product</span><i class="ph ph-caret-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('category.index')}}"><span class="text">Category</span></a></li>
                        <li><a href="{{ route('product.index')}}"><span class="text">Product</span></a></li>
                    </ul>
                </li>


                <li><a href="{{ route('order.index')}}"><i class="ph ph-tag"></i><span class="text">Order</span></a></li>
                <li><a href="{{ route('user.view')}}"><i class="ph ph-chat-circle-dots"></i><span class="text">Review</span></a></li>
            </ul>
        </div>
        <div class="menu">
            <p class="title">Setting</p>
            <ul>
                <li><a href="#"><i class="ph ph-gear"></i><span class="text">Setting</span></a></li>
            </ul>
        </div>
    </div>
    <div class="menu account-menu">
        <p class="title">Account</p>
        <ul>
            <li><a href="{{ route('user.logout')}}"><i class="ph ph-sign-out"></i><span class="text">Log Out</span></a></li>
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuItems = document.querySelectorAll('.menu-item');

        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                const subMenu = item.nextElementSibling;
                if (subMenu.style.display === 'block') {
                    subMenu.style.display = 'none';
                } else {
                    subMenu.style.display = 'block';
                }
            });
        });
    });
</script>