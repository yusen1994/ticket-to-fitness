<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>

<div class="gym-title"><gym-a href="./gym.html"><i class="iconfont">&#xe62c;</i></gym-a>Members</div>
    <div class="gym-form">
        <input type="text" placeholder="Search form something">
        <button><i class="iconfont">&#xe6f7;</i>Filter</button>
    </div>
    <div class="gym-body">
        <div class="gym-member-list">

        <?php foreach ($data['gym_members'] as $single){

            echo '            <div class="gym-member">
            <div class="gym-member-construct">
                <div class="gym-member-name">'.$single->firstname." ".$single->lastname.'</div>
                <div class="gym-member-active">Active</div>
            </div>
            <div class="gym-member-construct">
                <div class="gym-member-attend">Classes attended:3</div>
                <div class="gym-member-date">Joined:20 July 6</div>
            </div>      
            <div class="gym-line"></div>
        </div>';

        }
?>  
          
        </div>
        <div class="gym-desc">
            <p>Active means the are currently</p>
            <p>enrolled in an activity? Don't have to have this feature.</p>
        </div>
    </div>

    <?php require APPROOT . '/views/inc/footer.php'; ?>