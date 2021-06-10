<?php
        $users = DB::table('users')->get();
    
        echo $users->where('id', 'asd');
?>
<?php
        $user_ranks = DB::table('user_ranks')->get();
    
        echo $user_ranks;
?>