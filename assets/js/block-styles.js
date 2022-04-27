wp.domReady(() => {
  // POST TERMS
  wp.blocks.registerBlockStyle("core/post-terms", {
    name: "buttons",
    label: "Buttons",
  });
  // POST FEATURED IMAGE
  wp.blocks.registerBlockStyle("core/post-featured-image", {
    name: "ratio-1-1",
    label: "Ratio 1:1",
  });
  wp.blocks.registerBlockStyle("core/post-featured-image", {
    name: "ratio-4-3",
    label: "Ratio 4:3",
  });
  wp.blocks.registerBlockStyle("core/post-featured-image", {
    name: "ratio-3-2",
    label: "Ratio 3:2",
  });
  wp.blocks.registerBlockStyle("core/post-featured-image", {
    name: "ratio-16-9",
    label: "Ratio 16:9",
  });
  wp.blocks.registerBlockStyle("core/post-featured-image", {
    name: "ratio-og",
    label: "Open Graph",
  });
  wp.blocks.registerBlockStyle("core/post-featured-image", {
    name: "ratio-4-5",
    label: "Ratio 4:5",
  });
  // GROUP
  wp.blocks.registerBlockStyle("core/group", {
    name: "botom-space",
    label: "Bottom Space",
  });
  // HEADING
  wp.blocks.registerBlockStyle("core/heading", {
    name: "botom-space",
    label: "Bottom Space",
  });
  // COVER
  wp.blocks.registerBlockStyle("core/cover", {
    name: "botom-space",
    label: "Bottom Space",
  });
  // SPACER
  wp.blocks.registerBlockStyle("core/spacer", {
    name: "botom-space",
    label: "Bottom Space",
  });
  // QUERY LOOP
  wp.blocks.registerBlockStyle("core/query", {
    name: "m2",
    label: "Mobile 2 Column",
  });
});
