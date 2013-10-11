<?php

/**
 * @file
 * Contains \Drupal\derheapmarkdown\Plugin\Filter\FilterMarkdown.
 */

namespace Drupal\derheapmarkdown\Plugin\Filter;

use Drupal\filter\Annotation\Filter;
use Drupal\Core\Annotation\Translation;
use Drupal\filter\Plugin\FilterBase;

/**
 * Provides a filter to display any HTML as plain text.
 *
 * @Filter(
 *   id = "derheap_markdown",
 *   module = "filter",
 *   title = @Translation("Transforms Markdown to HTML."),
 *   type = FILTER_TYPE_MARKUP_LANGUAGE
 * )
 */
class FilterMarkdown extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode, $cache, $cache_id) {
  	$html = \Michelf\MarkdownExtra::defaultTransform($text);

    return  $html;
  }

  /**
   * {@inheritdoc}
   */
  public function getHTMLRestrictions() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function tips($long = FALSE) {
    return t('Markdown forever!.');
  }

}
