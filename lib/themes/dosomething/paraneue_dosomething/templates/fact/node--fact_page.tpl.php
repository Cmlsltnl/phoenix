<?php
/**
 * Returns the HTML for the Fact page.
 *
 * Available Variables
 * - $nid: Node ID for fact page (integer).
 * - $classes: Additional classes passed for output (string).
 * - $title: Title of fact page (string).
 * - $subtitle: Subtitle of fact page (string).
 * - $intro_title: Introductory title of fact page (string).
 * - $facts: Array of facts for the fact page (array).
 * - $sources: List of sources for the fact page (string).
 * - $cta_link: Call To Action link of fact page (string).
 */
?>

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <header role="banner" class="header">
    <div class="wrapper">
      <h1 class="header__title"><?php print $title; ?></h1>
      <?php if (isset($subtitle)): ?>
        <h2 class="header__subtitle"><?php print $subtitle; ?></h2>
      <?php endif; ?>

      <?php if (isset($promotions)) { print $promotions; } ?>
    </div>
  </header>

  <?php if (isset($intro)): ?>
    <section class="container">
      <div class="wrapper">
        <div class="container__block -narrow">
          <?php print $intro; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if (isset($first_fact_group)): ?>
  <section class="container -padded">
    <div class="wrapper">
      <div class="container__block">
        <?php if (isset($intro_image)): ?>
          <aside class="fact-aside">
            <?php print $intro_image; ?>
          </aside>
        <?php endif; ?>

        <ol class="list">
          <?php foreach ($first_fact_group as $key => $fact): ?>
            <li><?php print $fact['fact']; ?></li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if (isset($call_to_action)): ?>
    <div class="cta show-at-medium">
      <div class="wrapper">
        <h2 class="cta__message"><?php print $call_to_action; ?></h2>
        <?php print $cta_link; ?>
      </div>
    </div>

    <?php // Yahoo prototype ?>
    <?php if ($nid == 176): ?>
      <div class="cta show-only-small">
        <div class="wrapper">
          <h2 class="cta__message">Want to learn more about volcanoes?</h2>
          <a href="https://search.yahoo.com/search;_ylt=A0LEV1PdFwNW2ukAuyel87UF;_ylc=X1MDOTU4MTA0NjkEX3IDMgRmcgMEZ3ByaWQDMHVnUmhsV0lSMi5WWFZ1NWhWQVE2QQRuX3JzbHQDMARuX3N1Z2cDOQRvcmlnaW4Dc2VhcmNoLnlhaG9vLmNvbQRwb3MDMARwcXN0cgMEcHFzdHJsAwRxc3RybAM3BHF1ZXJ5A3ZvbGNhbm8EdF9zdG1wAzE0NDMwNDMyOTg-?p=volcano&fr=sfp&fr2=sb-top-search&iscqry=" class="button">Find out</a>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>

  <section class="container">
    <div class="wrapper">
      <div class="container__block with-lists">
        <?php if (isset($second_fact_group)): ?>
          <ol class="list" start="6">
            <?php foreach ($second_fact_group as $key => $fact): ?>
              <li><?php print $fact['fact']; ?></li>
            <?php endforeach; ?>
          </ol>
        <?php endif; ?>
      </div>

      <?php if (isset($sources)): ?>
        <div class="container__block">
          <section class="footnote">
            <h4 class="js-footnote-toggle"><?php print t('Sources'); ?></h4>
            <ul class="js-footnote-hidden">
              <?php foreach ($sources as $key => $source): ?>
                <li><sup><?php print ($key + 1); ?></sup> <?php print $source; ?></li>
              <?php endforeach; ?>
            </ul>
          </section>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php if (isset($call_to_action)): ?>
    <div class="cta show-at-medium">
      <div class="wrapper">
        <h2 class="cta__message"><?php print $call_to_action; ?></h2>
        <?php print $cta_link; ?>
      </div>
    </div>

    <?php // Yahoo prototype ?>
    <?php if ($nid == 176): ?>
      <div class="cta show-only-small">
        <div class="wrapper">
          <h2 class="cta__message">Want to learn more about volcanoes?</h2>
          <a href="https://search.yahoo.com/search;_ylt=A0LEV1PdFwNW2ukAuyel87UF;_ylc=X1MDOTU4MTA0NjkEX3IDMgRmcgMEZ3ByaWQDMHVnUmhsV0lSMi5WWFZ1NWhWQVE2QQRuX3JzbHQDMARuX3N1Z2cDOQRvcmlnaW4Dc2VhcmNoLnlhaG9vLmNvbQRwb3MDMARwcXN0cgMEcHFzdHJsAwRxc3RybAM3BHF1ZXJ5A3ZvbGNhbm8EdF9zdG1wAzE0NDMwNDMyOTg-?p=volcano&fr=sfp&fr2=sb-top-search&iscqry=" class="button">Find out</a>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>

  <?php if ($info_bar): ?>
    <?php print $info_bar; ?>
  <?php endif; ?>
</article>
