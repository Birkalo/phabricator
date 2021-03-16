<?php

final class PhabricatorUpPrometheusMetric extends PhabricatorPrometheusMetricGauge {
  public function getName(): string {
    return 'up';
  }

  public function getValues(): array {
    return [1];
  }

  public function getHelp(): string {
    return 'A gauge which indicates whether phabricator is up or not';
  }
}
