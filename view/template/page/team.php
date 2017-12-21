<?php NavActions::setNavUri('/learn') ?>
<?php Response::addMetaImage(Request::getHostAndProto() . '/img/cover-team.jpg') ?>
<?php Response::setMetaDescription('description.team') ?>
<?php echo View::render('nav/_header', ['isDark' => false]) ?>
<main>
  <div class="content photo-grid spacer2">
    <h1>{{page.team.header}}</h1>
    <?php foreach(['jeremy-kauffman', 'alex-grintsvayg', 'jack-robison', 'kay-kurokawa', 'bill-bittner',
          'akinwale-ariwodola', 'sean-yesmunt', 'liam-cardenas', 'josh-finer', 'reilly-smith', 'tom-zarebczan',
          'brinck-slattery', 'amit-tulshyan', 'igor-gassmann'] as $bioSlug): ?>
      <div class="spacer2">
        <?php echo View::render('content/_bio', ['person' => $bioSlug]) ?>
      </div>
    <?php endforeach ?>
    <h2>{{page.team.advisory}}</h2>
    <?php foreach(['alex-tabarrok', 'ray-carballada', 'stephan-kinsella', 'michael-huemer'] as $bioSlug): ?>
      <div class="spacer2">
        <?php echo View::render('content/_bio', ['person' => $bioSlug]) ?>
      </div>
    <?php endforeach ?>
  </div>
  <?php echo View::render('nav/_learnFooter') ?>
</main>
<?php echo View::render('nav/_footer') ?>
