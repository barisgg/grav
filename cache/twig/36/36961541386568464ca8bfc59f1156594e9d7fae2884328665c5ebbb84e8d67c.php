<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:/var/www/html/user/pages/01.home */
class __TwigTemplate_0dcc69f20db130e04b57106527742ad8b63e50e8bd7b572f9769c935fa4a7509 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h1>Say Hello to Grav!</h1>
<h2>installation successful...</h2>
<p>Congratulations! You have installed the <strong>Base Grav Package</strong> that provides a <strong>simple page</strong> and the default <strong>Quark</strong> theme to get you started.</p>
<div class=\"notices red\">
<p>If you see a <strong>404 Error</strong> when you click <code>Typography</code> in the menu, please refer to the <a href=\"http://learn.getgrav.org/troubleshooting/page-not-found\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">troubleshooting guide</a>.</p>
</div>
<h3>Find out all about Grav</h3>
<ul>
<li>Learn about <strong>Grav</strong> by checking out our dedicated <a href=\"http://learn.getgrav.org\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Learn Grav</a> site.</li>
<li>Download <strong>plugins</strong>, <strong>themes</strong>, as well as other Grav <strong>skeleton</strong> packages from the <a href=\"http://getgrav.org/downloads\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav Downloads</a> page.</li>
<li>Check out our <a href=\"http://getgrav.org/blog\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav Development Blog</a> to find out the latest goings on in the Grav-verse.</li>
</ul>
<div class=\"notices blue\">
<p>If you want a more <strong>full-featured</strong> base install, you should check out <a href=\"http://getgrav.org/downloads\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\"><strong>Skeleton</strong> packages available in the downloads</a>.</p>
</div>
<h3>Edit this Page</h3>
<p>To edit this page, simply navigate to the folder you installed <strong>Grav</strong> into, and then browse to the <code>user/pages/01.home</code> folder and open the <code>default.md</code> file in your <a href=\"http://learn.getgrav.org/basics/requirements\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">editor of choice</a>.  You will see the content of this page in <a href=\"http://learn.getgrav.org/content/markdown\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Markdown format</a>.</p>
<h3>Create a New Page</h3>
<p>Creating a new page is a simple affair in <strong>Grav</strong>.  Simply follow these simple steps:</p>
<ol>
<li>Navigate to your pages folder: <code>user/pages/</code> and create a new folder.  In this example, we will use <a href=\"http://learn.getgrav.org/content/content-pages\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">explicit default ordering</a> and call the folder <code>02.mypage</code>.</li>
<li>
<p>Launch your text editor and paste in the following sample code:</p>
<pre><code>---
title: My New Page
---
# My New Page!

This is the body of **my new page** and I can easily use _Markdown_ syntax here.</code></pre>
</li>
<li>Save this file in the <code>user/pages/02.mypage/</code> folder as <code>default.md</code>. This will tell <strong>Grav</strong> to render the page using the <strong>default</strong> template.</li>
<li>That is it! Reload your browser to see your new page in the menu.</li>
</ol>
<div class=\"notices yellow\">
<p>NOTE: The page will automatically show up in the Menu after the \"Home\" menu item. If you wish to change the name that shows up in the Menu, simple add: <code>menu: My Page</code> between the dashes in the page content. This is called the YAML front matter, and it is where you configure page-specific options.</p>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/01.home";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Say Hello to Grav!</h1>
<h2>installation successful...</h2>
<p>Congratulations! You have installed the <strong>Base Grav Package</strong> that provides a <strong>simple page</strong> and the default <strong>Quark</strong> theme to get you started.</p>
<div class=\"notices red\">
<p>If you see a <strong>404 Error</strong> when you click <code>Typography</code> in the menu, please refer to the <a href=\"http://learn.getgrav.org/troubleshooting/page-not-found\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">troubleshooting guide</a>.</p>
</div>
<h3>Find out all about Grav</h3>
<ul>
<li>Learn about <strong>Grav</strong> by checking out our dedicated <a href=\"http://learn.getgrav.org\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Learn Grav</a> site.</li>
<li>Download <strong>plugins</strong>, <strong>themes</strong>, as well as other Grav <strong>skeleton</strong> packages from the <a href=\"http://getgrav.org/downloads\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav Downloads</a> page.</li>
<li>Check out our <a href=\"http://getgrav.org/blog\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav Development Blog</a> to find out the latest goings on in the Grav-verse.</li>
</ul>
<div class=\"notices blue\">
<p>If you want a more <strong>full-featured</strong> base install, you should check out <a href=\"http://getgrav.org/downloads\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\"><strong>Skeleton</strong> packages available in the downloads</a>.</p>
</div>
<h3>Edit this Page</h3>
<p>To edit this page, simply navigate to the folder you installed <strong>Grav</strong> into, and then browse to the <code>user/pages/01.home</code> folder and open the <code>default.md</code> file in your <a href=\"http://learn.getgrav.org/basics/requirements\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">editor of choice</a>.  You will see the content of this page in <a href=\"http://learn.getgrav.org/content/markdown\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Markdown format</a>.</p>
<h3>Create a New Page</h3>
<p>Creating a new page is a simple affair in <strong>Grav</strong>.  Simply follow these simple steps:</p>
<ol>
<li>Navigate to your pages folder: <code>user/pages/</code> and create a new folder.  In this example, we will use <a href=\"http://learn.getgrav.org/content/content-pages\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">explicit default ordering</a> and call the folder <code>02.mypage</code>.</li>
<li>
<p>Launch your text editor and paste in the following sample code:</p>
<pre><code>---
title: My New Page
---
# My New Page!

This is the body of **my new page** and I can easily use _Markdown_ syntax here.</code></pre>
</li>
<li>Save this file in the <code>user/pages/02.mypage/</code> folder as <code>default.md</code>. This will tell <strong>Grav</strong> to render the page using the <strong>default</strong> template.</li>
<li>That is it! Reload your browser to see your new page in the menu.</li>
</ol>
<div class=\"notices yellow\">
<p>NOTE: The page will automatically show up in the Menu after the \"Home\" menu item. If you wish to change the name that shows up in the Menu, simple add: <code>menu: My Page</code> between the dashes in the page content. This is called the YAML front matter, and it is where you configure page-specific options.</p>
</div>", "@Page:/var/www/html/user/pages/01.home", "");
    }
}
