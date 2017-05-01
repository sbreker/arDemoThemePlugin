<footer>

  <div class="container">

    <div class="row">

      <div class="span3 offset1">
        <h5>Relevant links</h5>
        <ul>
          <li><a href="http://www.accesstomemory.org/">www.accesstomemory.org</a></li>
          <li><a href="https://www.accesstomemory.org/en/docs/2.3/">AtoM Documentation</a></li>
          <li><a href="https://wiki.accesstomemory.org/Main_Page">AtoM Wiki</a></li>
          <li><a href="https://www.accesstomemory.org/en/docs/2.3/admin-manual/customization/theming/#customization-theming">AtoM Theming Documentation</a></li>
          <li><a href="https://groups.google.com/forum/#!forum/ica-atom-users">AtoM Users Forum</a></li>
          <li><a href="https://www.artefactual.com/">Artefactual</a></li>
        </ul>
      </div>

      <div class="span2">
        <h5>Contact us</h5>
        <ul>
          <li><a href="mailto:demo@example.com">Email</a></li>
          <li><a href="https://twitter.com/accesstomemory">Twitter</a></li>
        </ul>
      </div>

      <div class="span3 offset3">
        <h5>Powered by</h5>
        <a href="http://www.accesstomemory.org"><?php echo image_tag('/plugins/arDemoThemePlugin/images/atom-logo.png', array('id' => 'atom-logo')) ?></a>
      </div>

    </div>

    <?php if (QubitAcl::check('userInterface', 'translate')): ?>
      <?php echo get_component('sfTranslatePlugin', 'translate') ?>
    <?php endif; ?>

    <?php echo get_component_slot('footer') ?>

  </div>

</footer>
