<nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <?php if($_SESSION['user'] ?? false) :?>
        <a href="/tracks">Tracks</a>
        <?php endif ; ?>
       <?php if($_SESSION['user'] ?? false) :?>
               <form method="POST" action="/sessions" style="position: absolute; top: 0; right: 0; margin: 10px;">
        <input type="hidden" name="_method" value="DELETE">
        <button style="background-color: black; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#333'" onmouseout="this.style.backgroundColor='black'">Log Out</button>

            </form>            
        <?php else : ?>
            <a href="/register" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; text-decoration: none; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='#007bff'">Register</a>
            <a href="/login" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; text-decoration: none; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='#007bff'">Log In</a>

        <?php endif ; ?>

       
    </nav>