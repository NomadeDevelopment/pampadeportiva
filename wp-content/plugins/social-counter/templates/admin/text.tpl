<div class="prisna_social_counter_section prisna_social_counter_{{ type }}{{ dependence.show.false:begin }} prisna_social_counter_no_display{{ dependence.show.false:end }}{{ has_dependence.true:begin }} prisna_social_counter_section_tabbed_{{ dependence_count }}{{ has_dependence.true:end }}" id="section_{{ id }}">

	<div class="prisna_social_counter_tooltip"></div>
	<div class="prisna_social_counter_description prisna_social_counter_no_display">{{ description_message }}</div>

	<div class="prisna_social_counter_title_container prisna_social_counter_icon prisna_social_counter_icon_grid2"><h3 class="prisna_social_counter_title">{{ title_message }}</h3></div>
	<div class="prisna_social_counter_setting">
		<div class="prisna_social_counter_field">
			<input class="prisna_social_counter_input" name="{{ id }}" id="{{ id }}" type="text" value="{{ value }}" />
		</div>
	</div>

	{{ has_dependence.true:begin }}
	<input type="hidden" name="{{ id }}_dependence" id="{{ id }}_dependence" value="{{ formatted_dependence }}" />
	<input type="hidden" name="{{ id }}_dependence_show_value" id="{{ id }}_dependence_show_value" value="{{ formatted_dependence_show_value }}" />
	{{ has_dependence.true:end }}	
	<div class="prisna_social_counter_clear"></div>

</div>