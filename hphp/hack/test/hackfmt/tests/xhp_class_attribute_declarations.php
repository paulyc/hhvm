<?hh // strict

final class :m:a extends :m:xui:block {
  attribute :m:xui:div;
}

final class :m:b extends :m:xui:block {
  attribute LongNameCollectionCausingLineBreak my-verbosely-named-collection @required;
}

final class :m:c extends :m:xui:block {
  attribute :m:xui:div, HandbagCollection collection @required;
}

final class :m:d extends :m:xui:block {
  attribute :m:xui:div, HandbagCollection collection @required, AccessorySet accessories;
}
