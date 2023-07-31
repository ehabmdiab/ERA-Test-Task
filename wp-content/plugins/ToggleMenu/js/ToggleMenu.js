(function (blocks, element, components, editor, blockEditor) {
  var el = element.createElement;
  var Button = components.Button;
  var withSelect = wp.data.withSelect;
  var { useState } = element;

  blocks.registerBlockType("namespace/toggle-menu-block", {
    title: "Custom Dropdown Block",
    icon: "smiley",
    category: "layout",

    edit: function (props) {
      var [isOpen, setIsOpen] = useState(false);

      function toggleMenu() {
        setIsOpen(!isOpen);
      }

      return el(
        "div",
        { className: "custom-dropdown-block" },
        el(
          Button,
          {
            onClick: toggleMenu,
          },
          "Toggle Menu"
        ),
        isOpen &&
          el(
            "div",
            { className: "menu" },
            el("p", null, "Menu Item 1"),
            el("p", null, "Menu Item 2"),
            el("p", null, "Menu Item 3")
          )
      );
    },

    save: function () {
      return null;
    },
  });
})(
  window.wp.blocks,
  window.wp.element,
  window.wp.components,
  window.wp.editor,
  window.wp.blockEditor
);
