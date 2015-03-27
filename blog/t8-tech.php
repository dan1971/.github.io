<!DOCTYPE html>
<html>
<head>
  <title>Dan Rollans Blogs</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="blog-stylesheet.css">
</head>

<body>
<main>
<header>
<div id="top">
  <table id="table_top"><tr><td>
  <img src="../imgs/DR_logo.jpg"></td>
  <td style="vertical-align: bottom ; text-align: right ;">
 <p id="contact">

 | Daniel Rollans / 949-355-3919 / <a href="#">danrollans.com</a> |

  </p>
  </td></tr></table>
</div>
</header>
  <h1>Blog Posts</h1>
  <section>

<hr />
<?php echo '<p>Hello World</p>'; ?> 
<h3>
   ++ What is Active Record and why it's awesome!
  </h3>

  <table id="blogs"><tr><td>
   <p>
    Active Record is a part of The Rails web development framework and allows the developer to quickly and easily build data access functionality into applications. Rather than using SQL commands, Active Record generally provides better and concise built-in methods to access data with a library of methods.
  </p>
<p> 
  The methods that Active Record provides are intuitive and reduce code complexity and increase code readability as compared to SQL. In addition to code brevity, some methods reduce the number of database queries allowing faster data retrieval while using less memory resources.

</p>
<p>

Usage of Active Record involves creating a Ruby Class object then creating a new class object. The new object then can call methods on the Class object and pass in arguments and conditions as per the method. 

</p>
<p>

Class creation and Active Record method call:

<br /><br />

 <code>
 class Client < ActiveRecord::Base<br />
  &nbsp;&nbsp;has_one :address<br />
  &nbsp;&nbsp;has_many :orders<br />
  &nbsp;&nbsp;has_and_belongs_to_many :roles<br />
end
</code>

<br /><br />

Here we create the new object and return the client with the id of '10':

<br /><br />

<code>
client = Client.find(10)
</code>

<br /><br />

For more info: <a href = "http://guides.rubyonrails.org/active_record_basics.html" target='new'>Rails Guides</a>
</p>

<br /><br />

   </td></tr></table>
  </section>
</main>

</body>
</html>